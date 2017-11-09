<?php
return array(
	//'配置项'=>'配置值'
    // 添加数据库配置信息
    'DB_TYPE'=>'mysql',// 数据库类型
    'DB_HOST'=>'127.0.0.1',// 服务器地址
    'DB_NAME'=>'thinkphp',// 数据库名
    'DB_USER'=>'root',// 用户名
    'DB_PWD'=>'123456',// 密码
    'DB_PORT'=>3306,// 端口
    'DB_PREFIX'=>'think_',// 数据库表前缀
    'DB_CHARSET'=>'utf8',// 数据库字符集

    'URL_MODEL'=>'3',

    /*项目常量*/
    'TMPL_PARSE_STRING' => array(
        '__ADMIN__' => __ROOT__.'/Application/Admin'
    ),
);