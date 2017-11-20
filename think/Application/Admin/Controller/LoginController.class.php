<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/20
 * Time: 11:09
 */
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
    public function login(){
        if(IS_POST){
            $login = array();
            switch (I('user',null,false)){
                case 'admin':
                    $login['uid'] = 1;
                    $login['user'] = 'admin';
                    break;
                case 'test':
                    $login['uid'] = 2;
                    $login['user'] = 'test';
                    break;
                case 'guest':
                    $login['uid'] = 3;
                    $login['user'] = 'guest';
                    break;
                default:
                    $this->error('不存在此用户!');
            }
            if(count($login)){
                session('auth',$login);
                $this->success('登录成功',U('Index/index'));
            }
        }else{
            $this->display();
        }
    }

    public function logout(){
        session('[destroy]');
        $this->success('退出成功',U('Login/login'));
    }
}