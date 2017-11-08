<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 13:58
 */
$filename = 'phpDemo/Demo/demo.txt';

$filestring = file_get_contents($filename);

$filearray = explode("\n",$filestring);

while(list($key,$val) = each($filearray)){
    ++$key;
    $val = trim($val);

    print'Line'.$key.':'.$val.'<br/>';
}