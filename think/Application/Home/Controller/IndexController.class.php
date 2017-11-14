<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        echo C('my_config',null,'default_config');
        echo C('USER_AUTH_ID');
        $config = array('WEB_SITE_TITLE'=>'ThinkPHP','WEB_SITE_DESCRIPTION'=>'开源PHP框架');
        C($config);
        echo C('WEB_SITE_TITLE');
    }
}