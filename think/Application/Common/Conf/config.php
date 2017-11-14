<?php
return array(
	//'配置项'=>'配置值'
    // 'MODULE_DENY_LIST' => array('Common','Runtime','admin'),
    'MULTI_MODULE' => false,
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

);