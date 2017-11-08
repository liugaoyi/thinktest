<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 11:12
 */
//sort() - 对数组进行升序排列
echo"sort函数：";
$cars=array("Volvo","BMW","Toyota");
sort($cars);
print_r($cars);

echo"<br/>";
echo"resort函数：";
rsort($cars);
print_r($cars);

echo"<br/>";
echo"asort函数：";
//asort() - 根据数组的值，对数组进行升序排列
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
print_r($age);

echo"<br/>";
echo"ksort函数：";
//ksort() - 根据数组的键，对数组进行升序排列
ksort($age);
print_r($age);

echo"<br/>";
echo"arsort函数：";
//arsort() - 根据数组的值，对数组进行降序排列
arsort($age);
print_r($age);

echo"<br/>";
echo"krsort函数：";
//krsort() - 根据数组的键，对数组进行降序排列
krsort($age);
print_r($age);