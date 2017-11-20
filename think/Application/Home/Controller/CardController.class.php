<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/20
 * Time: 15:58
 */
namespace Home\Controller;
use Think\Controller;

class CardController extends Controller{
    public function index(){
        $card = D('Card');
        $arr = $card->relation(true)->select();
        var_dump($arr);
    }
}