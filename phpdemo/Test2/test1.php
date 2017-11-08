<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 10:23
 */

class car{
    var $color;//定义变量
    //类构造方法给变量赋值
    function Car($color="green"){
        $this->color = $color;
    }

    //变量输出方法
    function what_color()
    {
        return $this->color;
    }
}

function print_vars($obj){
    //获取对象的所有属性（get_object_vars ( $obj )），遍历它们
    foreach ( get_object_vars ( $obj ) as $prop => $val ) {
        //将"\t属性名 = 属性值\n"输出到网页（\t是文本缩进，\n是文本换行，它们都是空白符，html在解析时表现为一个空格）
        echo "\t$prop = $val\n";
    }
}

//实例化对象并通过构造方法赋值
$herbie = new Car ( "white" );

echo "\herbie: Properties\n";
print_vars ( $herbie );