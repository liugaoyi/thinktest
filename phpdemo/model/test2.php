<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 16:34
 */

class a{
    public static function who(){
        echo "a类的who方法";
    }

    public static function test(){
        static::who();
    }
}

class b extends a{
    public static function who()
    {
        echo "b类的who方法";
    }
}

$b = new b();
$b->test();
