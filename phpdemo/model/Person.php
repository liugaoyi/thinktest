<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 15:49
 */

//self 类的本身
//parent 父类的本身
class Person{
    public static $hand = "手";
    public static $foot = "脚";

    public  static function work(){
        echo(self::$foot);
        return"单纯的工作";
    }
}

class Imooc extends Person{
    public function play(){
        return parent::work();
    }
}

$Imooc = new Imooc();
echo($Imooc->play());


