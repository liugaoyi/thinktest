<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/17
 * Time: 15:26
 */

namespace Common\Controller;

use Think\Auth;
use Think\Controller;

class AuthController extends Controller{
    protected function _initialize(){
        $sess_auth = session('auth');
        if(!$sess_auth){
            $this->error('非法访问！正在跳转到登录页!',U('Login/login'));
        }
        //如果是超级管理员，给与所以权限
        if($sess_auth['uid'] == 1){
            return true;
        }

        $auth = new Auth();
        if(!$auth->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, $sess_auth['uid'])){
            $this->error('没有权限！',U('Login/login'));
        }
    }
}