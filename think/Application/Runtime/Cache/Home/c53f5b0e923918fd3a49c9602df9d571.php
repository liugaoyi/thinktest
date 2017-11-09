<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Hello,<?php echo ($name); ?>！
<br/>
Name：<?php echo ($data["name"]); ?><br/>
Email：<?php echo ($data["email"]); ?><br/>

<?php echo (MODULE_NAME); ?><br/>

<?php echo ($_SERVER['SCRIPT_NAME']); ?> // 输出$_SERVER['SCRIPT_NAME']变量<br/>
<?php echo (session('user_id')); ?> // 输出$_SESSION['user_id']变量<br/>
<?php echo ($_GET['pageNumber']); ?> // 输出$_GET['pageNumber']变量<br/>
<?php echo (cookie('name')); ?>  // 输出$_COOKIE['name']变量<br/>

</body>
</html>