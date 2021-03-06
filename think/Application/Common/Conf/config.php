<?php
return array(
	//'配置项'=>'配置值'
    // 'MODULE_DENY_LIST' => array('Common','Runtime','admin'),
    //'MULTI_MODULE' => false,
    //'DEFAULT_MODULE' => 'admin',
    //mysql全局定义
    /*
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'localhost',
    'DB_USER'=>'root',
    'DB_PWD'=>'123456',
    'DB_NAME'=>'thinkphptest',
    'DB_PORT'=>3306,
    'DB_PREFIX'=>'think_',
    */
    //pdo专用定义
   'DB_TYPE'=>'mysql',
    'DB_USER'=>'root',
    'DB_PWD'=>'123456',
    'DB_PREFIX'=>'think_',
    'DB_DSN'=>'mysql:host=localhost;dbname=thinkphptest;charset=UTF8',

    //页面调试工具
    'SHOW_PAGE_TRACE' =>true,

    //设置内置标签 ，就不需要标签预加载了
    //'TAGLIB_BUILD_IN' => 'cx,html',
    //'TAGLIB_PRE_LOAD' => 'html',

    //设置可访问模块
   /* 'MODULE_ALLOW_LIST'=>array('Home','Admin'),
    'DEFAULT_MODULE'=>'Home',//默认模块可以省去模块名输入
    'DEFAULT_CONTROLLER'    =>  'User', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称

    //启用路由功能
    'URL_MODEL' => 2, //URL模式
    'URL_ROUTER_ON' => true,

    //配置路由规则
    'URL_ROUTE_RULES'=>array(
        'u'=>'/User/index',
    ),*/

    //控制器后缀
    //'ACTION_SUFFIX'=>'Action',

    //允许二级控制器
    //'CONTROLLER_LEVEL'=>2,

    //启用Action参数绑定，默认为true，可以不写
    //'URL_PARAMS_BIND'=>true,

    //启用顺序传参绑定
    //'URL_PARAMS_BIND_TYPE'=>1,

    //'URL_HTML_SUFFIX'=>'shtml',
    //'URL_DENY_SUFFIX' => 'html|pdf|ico|png|gif|jpg', // URL禁止访问的后缀设置

    //'URL_CASE_INSENSITIVE' =>true,//Url区分大小写

    //默认错误跳转对应的模板文件
    //'TMPL_ACTION_ERROR' => 'Public:error',
    //默认成功跳转对应的模板文件
    //'TMPL_ACTION_SUCCESS' => 'Public:success',

    //不启动session
    //'SESSION_AUTO_START' =>false,

    //session前缀
    //'SESSION_PREFIX'=>'think_',

    'LANG_SWITCH_ON' => true,   // 开启语言包功能

    'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
    'LANG_LIST'        => 'zh-cn,en-us', // 允许切换的语言列表 用逗号分隔
    'VAR_LANGUAGE'     => 'lang', // 默认语言切换变量

    'HTML_CACHE_ON'     =>    true, // 开启静态缓存
    'HTML_CACHE_TIME'   =>    60,   // 全局静态缓存有效期（秒）
    'HTML_FILE_SUFFIX'  =>    '.html', // 设置静态缓存文件后缀
    'HTML_CACHE_RULES'  =>     array(  // 定义静态缓存规则
        // 定义格式1 数组方式
        //'User:huancun' => array('{:module}_{:controller}_{:action}_{id}',60),
        //'User:huancun' => array('{:module}/{:controller}/{:action}/{id}',60),
        //'huancun'=>array('{id}'),
        '*'=>array('{$_SERVER.REQUEST_URL|md5}'),
    )

);