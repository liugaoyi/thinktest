<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/14
 * Time: 10:57
 */

namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller{

    public function login(){
        //登录页面展示
        $this -> display();
    }

}