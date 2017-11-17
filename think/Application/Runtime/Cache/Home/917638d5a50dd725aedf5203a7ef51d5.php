<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="/thinktest/think/index.php/Home/Index/upload" enctype="multipart/form-data" method="post">
    <input type="file" name="photo[]"/>
    <input type="file" name="photo[]"/>
    <input type="file" name="photo[]"/>
    <input type="submit" value="上传"/>
</form>

</body>
</html>