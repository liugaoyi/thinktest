<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
    <p>三个用户：admin为超级管理员，所以权限；test测试用户，没有权限；guest游客，只要登录权限</p>
    <form method="post" action="<?php echo U('Login/login');?>">
        <p>用户名：<input type="text" name="user"/></p>
        <p><input type="submit" value="登录"/></p>
    </form>
</body>
</html>