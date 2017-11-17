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
        $auth = new Auth();
        if(!$auth->check()){
            $this->error('没有权限！');
        }
    }
}