<?php
namespace Common\Controller;
use Common\Controller\AppframeController;
class HomebaseController extends AppframeController {
	
	protected $user = array();
	
	public function __construct() {
		$this->set_action_success_error_tpl();
		parent::__construct();
	}
	
	function _initialize() {
		parent::_initialize();
		$config = array('THINK_SDK_QQ' => C('THINK_SDK_QQ'), 'THINK_SDK_SINA' => C('THINK_SDK_SINA'));
		if(!isset($config['THINK_SDK_QQ']['ENABLE'])) {
			$config['THINK_SDK_QQ']['ENABLE'] = 0;
		}
		if(!isset($config['THINK_SDK_SINA']['ENABLE'])) {
			$config['THINK_SDK_SINA']['ENABLE'] = 0;
		}
		$this->assign('oauth_config', $config);
	}
	
	/**
	 * 检查用户登录
	 */
	protected function check_login() {
        if($this->is_login()) {
            return true;
        } else {
            $this->tip('您还没有登录！', UU('user/login/index'));
        }
	}

	/**
	 * 检查用户手机号状态
	 */
	protected function check_mobile() {
		if(!$this->user['mobile_status']) {//完善手机号码
			$this->tip("请先绑定认证手机号码!", leuu("User/Profile/mobile"));
		}
	}

    /**
     * 判断用户是否登录,如果已登录则设置用户user
     *！！Rst/Controller/BaseController.class.php is_login方法需要同步修改
     */
    protected function is_login() {
		if(sp_is_user_login()) {
			$this->user = M('Users')->where(array('id' => sp_get_current_userid()))->find();            
			$user = session('user');
			if($user['id'] == $this->user['id']) {
				$this->user['avatar'] = sp_get_user_avatar_url($this->user['avatar']);				
				$this->user['account'] = D('Finance/UsersAccount')->getByUid($this->user['id']);
				$this->assign('user', $this->user);
				return true;
			}
		}
        return false;
    }
	
	/**
	 * 检查用户状态
	 */
	protected function  check_user() {
	    
		if($this->user['user_status'] == 2) {
			$this->error('您还没有激活账号，请激活后再使用！', UU("user/login/active"));
		}
		
		if($this->user['user_status'] == 0) {
			$this->error('此账号已经被禁止使用，请联系管理员！', __ROOT__."/");
		}
	}
	
	/**
	 * 发送注册激活邮件
	 */
	protected  function _send_to_active(){
		$option = M('Options')->where(array('option_name'=>'member_email_active'))->find();
		if(!$option){
			$this->error('网站未配置账号激活信息，请联系网站管理员');
		}
		$options = json_decode($option['option_value'], true);
		//邮件标题
		$title = $options['title'];
		$user = sp_get_current_user();
		$uid = $user['id'];
		$username = $user['user_login'];
	
		$activekey = md5($uid.time().uniqid());
		$users_model = M("Users");
	
		$result=$users_model->where(array("id"=>$uid))->save(array("user_activation_key"=>$activekey));
		if(!$result){
			$this->error('激活码生成失败！');
		}
		//生成激活链接
		$url = UU('user/register/active',array("hash"=>$activekey), "", true);
		//邮件内容
		$template = $options['template'];
		$content = str_replace(array('http://#link#','#username#'), array($url,$username),$template);
	
		$send_result = sp_send_email($user['user_email'], $title, $content);
	
		if($send_result['error']){
			$this->error('激活邮件发送失败，请尝试登录后，手动发送激活邮件！');
		}
	}
	
	/**
	 * 加载模板和页面输出 可以返回输出内容
	 * @access public
	 * @param string $templateFile 模板文件名
	 * @param string $charset 模板输出字符集
	 * @param string $contentType 输出类型
	 * @param string $content 模板输出内容
	 * @return mixed
	 */
	public function display($templateFile = '', $charset = '', $contentType = '', $content = '', $prefix = '') {
		//echo $this->parseTemplate($templateFile);
		parent::display($this->parseTemplate($templateFile), $charset, $contentType);
	}
	
	/**
	 * 获取输出页面内容
	 * 调用内置的模板引擎fetch方法，
	 * @access protected
	 * @param string $templateFile 指定要调用的模板文件
	 * 默认为空 由系统自动定位模板文件
	 * @param string $content 模板输出内容
	 * @param string $prefix 模板缓存前缀*
	 * @return string
	 */
	public function fetch($templateFile='',$content='',$prefix=''){
	    $templateFile = empty($content)?$this->parseTemplate($templateFile):'';
		return parent::fetch($templateFile,$content,$prefix);
	}
	
	/**
	 * 自动定位模板文件
	 * @access protected
	 * @param string $template 模板文件规则
	 * @return string
	 */
	public function parseTemplate($template='') {
		
		$tmpl_path=C("SP_TMPL_PATH");
		define("SP_TMPL_PATH", $tmpl_path);
		// 获取当前主题名称
		$theme      =    C('SP_DEFAULT_THEME');
		if(C('TMPL_DETECT_THEME')) {// 自动侦测模板主题
			$t = C('VAR_TEMPLATE');
			if (isset($_GET[$t])){
				$theme = $_GET[$t];
			} elseif(cookie('think_template')) {
				$theme = cookie('think_template');
			}
			if(!file_exists($tmpl_path."/".$theme)) {
				$theme  =   C('SP_DEFAULT_THEME');
			}
			cookie('think_template', $theme, 864000);
		}
		
		$theme_suffix="";
		
		if(C('MOBILE_TPL_ENABLED') && sp_is_mobile()){//开启手机模板支持
		    
		    if (C('LANG_SWITCH_ON',null,false)){
		        if(file_exists($tmpl_path."/".$theme."_mobile_".LANG_SET)){//优先级最高
		            $theme_suffix  =  "_mobile_".LANG_SET;
		        }elseif (file_exists($tmpl_path."/".$theme."_mobile")){
		            $theme_suffix  =  "_mobile";
		        }elseif (file_exists($tmpl_path."/".$theme."_".LANG_SET)){
		            $theme_suffix  =  "_".LANG_SET;
		        }
		    }else{
    		    if(file_exists($tmpl_path."/".$theme."_mobile")){
    		        $theme_suffix  =  "_mobile";
    		    }
		    }
		}else{
		    $lang_suffix="_".LANG_SET;
		    if (C('LANG_SWITCH_ON',null,false) && file_exists($tmpl_path."/".$theme.$lang_suffix)){
		        $theme_suffix = $lang_suffix;
		    }
		}
		
		$theme=$theme.$theme_suffix;
		
		C('SP_DEFAULT_THEME',$theme);
		
		$current_tmpl_path=$tmpl_path.$theme."/";
		// 获取当前主题的模版路径
		define('THEME_PATH', $current_tmpl_path);
		
		C("TMPL_PARSE_STRING.__TMPL__",__ROOT__."/".$current_tmpl_path);
		
		C('SP_VIEW_PATH',$tmpl_path);
		C('DEFAULT_THEME',$theme);
		
		define("SP_CURRENT_THEME", $theme);
		
		if(is_file($template)) {
			return $template;
		}
		$depr       =   C('TMPL_FILE_DEPR');
		$template   =   str_replace(':', $depr, $template);
		
		// 获取当前模块
		$module   =  MODULE_NAME;
		if(strpos($template,'@')){ // 跨模块调用模版文件
			list($module,$template)  =   explode('@',$template);
		}
		
		
		// 分析模板文件规则
		if('' == $template) {
			// 如果模板文件名为空 按照默认规则定位
			$template = "/".CONTROLLER_NAME . $depr . ACTION_NAME;
		}elseif(false === strpos($template, '/')){
			$template = "/".CONTROLLER_NAME . $depr . $template;
		}
		
		$file = sp_add_template_file_suffix($current_tmpl_path.$module.$template);
		$file= str_replace("//",'/',$file);
		if(!file_exists_case($file)) E(L('_TEMPLATE_NOT_EXIST_').':'.$file);
		return $file;
	}
	
	/**
	 * 设置错误，成功跳转界面
	 */
	private function set_action_success_error_tpl() {
		$theme      =    C('SP_DEFAULT_THEME');
		if(C('TMPL_DETECT_THEME')) {// 自动侦测模板主题
			if(cookie('think_template')){
				$theme = cookie('think_template');
			}
		}
		//by ayumi手机提示模板
		$tpl_path = '';
		if(C('MOBILE_TPL_ENABLED') && sp_is_mobile() && file_exists(C("SP_TMPL_PATH")."/".$theme."_mobile")){//开启手机模板支持
			$theme  =   $theme."_mobile";
			$tpl_path=C("SP_TMPL_PATH").$theme."/";
		}else{
			$tpl_path=C("SP_TMPL_PATH").$theme."/";
		}
		
		//by ayumi手机提示模板
		$defaultjump=THINK_PATH.'Tpl/dispatch_jump.tpl';
		$action_success = sp_add_template_file_suffix($tpl_path.C("SP_TMPL_ACTION_SUCCESS"));
		$action_error = sp_add_template_file_suffix($tpl_path.C("SP_TMPL_ACTION_ERROR"));
		$action_tip = sp_add_template_file_suffix($tpl_path.C("SP_TMPL_ACTION_TIP"));
		if(file_exists_case($action_success)){
			C("TMPL_ACTION_SUCCESS",$action_success);
		}else{
			C("TMPL_ACTION_SUCCESS",$defaultjump);
		}

		if(file_exists_case($action_error)){
			C("TMPL_ACTION_ERROR",$action_error);
		}else{
			C("TMPL_ACTION_ERROR",$defaultjump);
		}

		if(file_exists_case($action_tip)){
			C("TMPL_ACTION_TIP",$action_tip);
		}else{
			C("TMPL_ACTION_TIP",$defaultjump);
		}
	}	
}