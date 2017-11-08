<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 15:32
 */
function __autoload($className){
    require $className.".php";
    echo($className);
    exit;
}

$test8 = new test8();
var_dump($test8);