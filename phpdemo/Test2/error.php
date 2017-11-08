<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/20
 * Time: 13:41
 */

if(!file_exists("wel.txt")){
    die("文件不存在");
}else{
    $file = fopen("wel.txt","r");
}