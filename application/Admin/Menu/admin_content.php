<?php
return array (
  'app' => 'Admin',
  'model' => 'Content',
  'action' => 'default',
  'data' => '',
  'type' => '0',
  'status' => '1',
  'name' => '内容管理',
  'icon' => 'th',
  'remark' => '',
  'listorder' => '30',
  'children' => 
  array (
    array (
      'app' => 'Portal',
      'model' => 'AdminPage',
      'action' => 'index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '页面管理',
      'icon' => '',
      'remark' => '',
      'listorder' => '0',
      'children' => 
      array (
        array (
          'app' => 'Portal',
          'model' => 'AdminPage',
          'action' => 'listorders',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '页面排序',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminPage',
          'action' => 'delete',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '删除页面',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminPage',
          'action' => 'edit',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '编辑页面',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
          'children' => 
          array (
            array (
              'app' => 'Portal',
              'model' => 'AdminPage',
              'action' => 'edit_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '提交编辑',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminPage',
          'action' => 'add',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '添加页面',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
          'children' => 
          array (
            array (
              'app' => 'Portal',
              'model' => 'AdminPage',
              'action' => 'add_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '提交添加',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
      ),
    ),
    array (
      'app' => 'Portal',
      'model' => 'AdminPost',
      'action' => 'index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '文章管理',
      'icon' => '',
      'remark' => '',
      'listorder' => '1',
      'children' => 
      array (
        array (
          'app' => 'Portal',
          'model' => 'AdminPost',
          'action' => 'listorders',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '文章排序',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminPost',
          'action' => 'top',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '文章置顶',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminPost',
          'action' => 'recommend',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '文章推荐',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminPost',
          'action' => 'move',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '批量移动',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminPost',
          'action' => 'check',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '文章审核',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminPost',
          'action' => 'delete',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '删除文章',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminPost',
          'action' => 'edit',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '编辑文章',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
          'children' => 
          array (
            array (
              'app' => 'Portal',
              'model' => 'AdminPost',
              'action' => 'edit_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '提交编辑',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminPost',
          'action' => 'add',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '添加文章',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
          'children' => 
          array (
            array (
              'app' => 'Portal',
              'model' => 'AdminPost',
              'action' => 'add_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '提交添加',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
      ),
    ),
    array (
      'app' => 'Portal',
      'model' => 'AdminTerm',
      'action' => 'index',
      'data' => '',
      'type' => '0',
      'status' => '1',
      'name' => '分类管理',
      'icon' => '',
      'remark' => '',
      'listorder' => '2',
      'children' => 
      array (
        array (
          'app' => 'Portal',
          'model' => 'AdminTerm',
          'action' => 'listorders',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '文章分类排序',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminTerm',
          'action' => 'delete',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '删除分类',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminTerm',
          'action' => 'edit',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '编辑分类',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
          'children' => 
          array (
            array (
              'app' => 'Portal',
              'model' => 'AdminTerm',
              'action' => 'edit_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '提交编辑',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminTerm',
          'action' => 'add',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '添加分类',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
          'children' => 
          array (
            array (
              'app' => 'Portal',
              'model' => 'AdminTerm',
              'action' => 'add_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '提交添加',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
      ),
    ),
    array (
      'app' => 'Comment',
      'model' => 'Commentadmin',
      'action' => 'index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '评论管理',
      'icon' => '',
      'remark' => '',
      'listorder' => '3',
      'children' => 
      array (
        array (
          'app' => 'Comment',
          'model' => 'Commentadmin',
          'action' => 'delete',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '删除评论',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Comment',
          'model' => 'Commentadmin',
          'action' => 'check',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '评论审核',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
      ),
    ),
    array (
      'app' => 'Admin',
      'model' => 'Recycle',
      'action' => 'default',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '回收站',
      'icon' => '',
      'remark' => '',
      'listorder' => '4',
      'children' => 
      array (
        array (
          'app' => 'Portal',
          'model' => 'AdminPost',
          'action' => 'recyclebin',
          'data' => '',
          'type' => '1',
          'status' => '1',
          'name' => '文章回收',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
          'children' => 
          array (
            array (
              'app' => 'Portal',
              'model' => 'AdminPost',
              'action' => 'restore',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '文章还原',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
            ),
            array (
              'app' => 'Portal',
              'model' => 'AdminPost',
              'action' => 'clean',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '彻底删除',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
            ),
          ),
        ),
        array (
          'app' => 'Portal',
          'model' => 'AdminPage',
          'action' => 'recyclebin',
          'data' => '',
          'type' => '1',
          'status' => '1',
          'name' => '页面回收',
          'icon' => '',
          'remark' => '',
          'listorder' => '1',
          'children' => 
          array (
            array (
              'app' => 'Portal',
              'model' => 'AdminPage',
              'action' => 'clean',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '彻底删除',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
            ),
            array (
              'app' => 'Portal',
              'model' => 'AdminPage',
              'action' => 'restore',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '页面还原',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
            ),
          ),
        ),
      ),
    ),
    array (
      'app' => 'Api',
      'model' => 'Guestbookadmin',
      'action' => 'index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '所有留言',
      'icon' => '',
      'remark' => '',
      'listorder' => '5',
      'children' => 
      array (
        array (
          'app' => 'Api',
          'model' => 'Guestbookadmin',
          'action' => 'delete',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '删除网站留言',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
      ),
    ),
    array (
      'app' => 'Admin',
      'model' => 'Link',
      'action' => 'index',
      'data' => '',
      'type' => '0',
      'status' => '1',
      'name' => '友情链接',
      'icon' => '',
      'remark' => '',
      'listorder' => '6',
      'children' => 
      array (
        array (
          'app' => 'Admin',
          'model' => 'Link',
          'action' => 'listorders',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '友情链接排序',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Admin',
          'model' => 'Link',
          'action' => 'toggle',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '友链显示切换',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Admin',
          'model' => 'Link',
          'action' => 'delete',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '删除友情链接',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
        ),
        array (
          'app' => 'Admin',
          'model' => 'Link',
          'action' => 'edit',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '编辑友情链接',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
          'children' => 
          array (
            array (
              'app' => 'Admin',
              'model' => 'Link',
              'action' => 'edit_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '提交编辑',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
        array (
          'app' => 'Admin',
          'model' => 'Link',
          'action' => 'add',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '添加友情链接',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
          'children' => 
          array (
            array (
              'app' => 'Admin',
              'model' => 'Link',
              'action' => 'add_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '提交添加',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
      ),
    ),
    array (
      'app' => 'Admin',
      'model' => 'Ad',
      'action' => 'index',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '网站广告',
      'icon' => '',
      'remark' => '',
      'listorder' => '7',
      'children' => 
      array (
        array (
          'app' => 'Admin',
          'model' => 'Ad',
          'action' => 'toggle',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '广告显示切换',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
        ),
        array (
          'app' => 'Admin',
          'model' => 'Ad',
          'action' => 'delete',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '删除广告',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
        ),
        array (
          'app' => 'Admin',
          'model' => 'Ad',
          'action' => 'edit',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '编辑广告',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
          'children' => 
          array (
            array (
              'app' => 'Admin',
              'model' => 'Ad',
              'action' => 'edit_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '提交编辑',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
        array (
          'app' => 'Admin',
          'model' => 'Ad',
          'action' => 'add',
          'data' => '',
          'type' => '1',
          'status' => '0',
          'name' => '添加广告',
          'icon' => '',
          'remark' => '',
          'listorder' => '1000',
          'children' => 
          array (
            array (
              'app' => 'Admin',
              'model' => 'Ad',
              'action' => 'add_post',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '提交添加',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
          ),
        ),
      ),
    ),
    array (
      'app' => 'Admin',
      'model' => 'Slide',
      'action' => 'default',
      'data' => '',
      'type' => '1',
      'status' => '1',
      'name' => '幻灯片',
      'icon' => '',
      'remark' => '',
      'listorder' => '8',
      'children' => 
      array (
        array (
          'app' => 'Admin',
          'model' => 'Slide',
          'action' => 'index',
          'data' => '',
          'type' => '1',
          'status' => '1',
          'name' => '幻灯片管理',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
          'children' => 
          array (
            array (
              'app' => 'Admin',
              'model' => 'Slide',
              'action' => 'listorders',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '幻灯片排序',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
            array (
              'app' => 'Admin',
              'model' => 'Slide',
              'action' => 'toggle',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '幻灯片显示切换',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
            array (
              'app' => 'Admin',
              'model' => 'Slide',
              'action' => 'ban',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '禁用幻灯片',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
            array (
              'app' => 'Admin',
              'model' => 'Slide',
              'action' => 'cancelban',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '启用幻灯片',
              'icon' => '',
              'remark' => '',
              'listorder' => '0',
            ),
            array (
              'app' => 'Admin',
              'model' => 'Slide',
              'action' => 'delete',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '删除幻灯片',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
            ),
            array (
              'app' => 'Admin',
              'model' => 'Slide',
              'action' => 'edit',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '编辑幻灯片',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
              'children' => 
              array (
                array (
                  'app' => 'Admin',
                  'model' => 'Slide',
                  'action' => 'edit_post',
                  'data' => '',
                  'type' => '1',
                  'status' => '0',
                  'name' => '提交编辑',
                  'icon' => '',
                  'remark' => '',
                  'listorder' => '0',
                ),
              ),
            ),
            array (
              'app' => 'Admin',
              'model' => 'Slide',
              'action' => 'add',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '添加幻灯片',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
              'children' => 
              array (
                array (
                  'app' => 'Admin',
                  'model' => 'Slide',
                  'action' => 'add_post',
                  'data' => '',
                  'type' => '1',
                  'status' => '0',
                  'name' => '提交添加',
                  'icon' => '',
                  'remark' => '',
                  'listorder' => '0',
                ),
              ),
            ),
          ),
        ),
        array (
          'app' => 'Admin',
          'model' => 'Slidecat',
          'action' => 'index',
          'data' => '',
          'type' => '1',
          'status' => '1',
          'name' => '幻灯片分类',
          'icon' => '',
          'remark' => '',
          'listorder' => '0',
          'children' => 
          array (
            array (
              'app' => 'Admin',
              'model' => 'Slidecat',
              'action' => 'delete',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '删除分类',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
            ),
            array (
              'app' => 'Admin',
              'model' => 'Slidecat',
              'action' => 'edit',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '编辑分类',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
              'children' => 
              array (
                array (
                  'app' => 'Admin',
                  'model' => 'Slidecat',
                  'action' => 'edit_post',
                  'data' => '',
                  'type' => '1',
                  'status' => '0',
                  'name' => '提交编辑',
                  'icon' => '',
                  'remark' => '',
                  'listorder' => '0',
                ),
              ),
            ),
            array (
              'app' => 'Admin',
              'model' => 'Slidecat',
              'action' => 'add',
              'data' => '',
              'type' => '1',
              'status' => '0',
              'name' => '添加分类',
              'icon' => '',
              'remark' => '',
              'listorder' => '1000',
              'children' => 
              array (
                array (
                  'app' => 'Admin',
                  'model' => 'Slidecat',
                  'action' => 'add_post',
                  'data' => '',
                  'type' => '1',
                  'status' => '0',
                  'name' => '提交添加',
                  'icon' => '',
                  'remark' => '',
                  'listorder' => '0',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);