<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 10:37
 */

//strlen() 函数返回字符串的长度（字符数）。
echo "strlen函数：";
echo strlen("Hello world!");

echo "<br/>";
//strpos() 函数用于在字符串内查找一个字符或一段指定的文本。
//如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。
echo "strpos函数：";
echo strpos("Hello world!","world");
echo "<br/>";

//intdiv() 函数，接收两个参数，返回值为第一个参数除于第二个参数的值并取整。php7新增
echo "intdiv函数：";
echo intdiv(12,3);
echo "<br/>";

//isset函数是检测变量是否设置。
echo "isset函数：";
$test = 'php中文网';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username, PHP_EOL;
echo "<br/>";

//count() 函数用于返回数组的长度（元素的数量）
echo "count函数：";
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
echo "<br/>";