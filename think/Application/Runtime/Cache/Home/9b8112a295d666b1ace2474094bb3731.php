<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <p><?php echo (L("form_user")); ?>：<input type="text" name="user"></p>
    <p><?php echo (L("form_pass")); ?>：<input type="password" name="pass"></p>
    <p><?php echo (L("form_email")); ?>：<input type="text" name="email"></p>
    <p><input type="submit"value="<?php echo (L("form_submit")); ?>"></p>
</body>
</html>