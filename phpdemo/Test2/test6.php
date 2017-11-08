<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 11:31
 */
//PHP $_REQUEST 用于收集HTML表单提交的数据。
echo "REQUEST函数：";
$name = $_REQUEST['fname'];
echo $name;

//PHP $_POST 被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"。
echo"<br/>";
echo "post函数：";
$name = $_POST['fname'];
echo $name;
