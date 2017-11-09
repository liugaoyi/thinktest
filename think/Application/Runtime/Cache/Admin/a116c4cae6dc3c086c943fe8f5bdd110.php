<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    中括号形式：<?php echo ($array[0]); ?>,<?php echo ($array[1]); ?>,<?php echo ($array[2]); ?>,<?php echo ($array[3]); ?><br/>
    点形式：<?php echo ($array["0"]); ?>-<?php echo ($array["1"]); ?>-<?php echo ($array["2"]); ?>-<?php echo ($array["3"]); ?><hr/>

    二维数组<br/>
    中括号形式:<?php echo ($array2[0][0]); ?>-<?php echo ($array2[0][1]); ?>-<?php echo ($array2[0][2]); ?>-<?php echo ($array2[0][3]); ?><br/>
    点形式：<?php echo ($array2["1"]["0"]); ?>-<?php echo ($array2["1"]["1"]); ?>-<?php echo ($array2["1"]["2"]); ?>-<?php echo ($array2["1"]["3"]); ?>
</body>
</html>