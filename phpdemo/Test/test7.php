<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 15:07
 */

class Computer{
    //构造方法 __construct
    public function __construct($high = 0)
    {
        if($high){
            echo'高配cpu就绪';
            echo'高配主板就绪';
            echo'高配内存就绪';
        }else{
            echo'cpu就绪';
            echo'主板就绪';
            echo'内存就绪';
        }
    }

    public function game(){
        echo'玩游戏';
    }

}

$Computer = new Computer(1);
$Computer->game();