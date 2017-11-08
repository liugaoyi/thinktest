<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 15:42
 */

spl_autoload_register(function($className){
    include str_replace("\\","/",$className.".php");
});

$imooc = new model\imooc();
var_dump($imooc);