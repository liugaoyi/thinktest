<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 10:56
 */
//创建数组
$cars=array("Volvo","BMW","Toyota");
//获得数组长度
$arrlength=count($cars);

//for循环打印数组
echo"for循环打印数组：";
for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "--";
}

echo"<br/>";
//创建关联数组
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//通过自定义键输出值
echo"通过自定义键输出关联数组值：";
echo "Peter is " . $age['Peter'] . " years old.";
echo"<br/>";

//foreach循环打印关联数组
echo"foreach循环打印关联数组值：";
echo"<br/>";
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}