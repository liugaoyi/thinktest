<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/20
 * Time: 15:58
 */
namespace Home\Controller;
use Think\Controller;

class ContentController extends Controller{
    public function index(){
        $content = D('Content');
        $arr = $content->relation(true)->select();
        var_dump($arr);
    }
}