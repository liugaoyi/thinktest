<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>time</th>
    </tr>
    <?php if(is_array($list)): foreach($list as $key=>$obj): ?><tr>
            <th><?php echo ($obj["id"]); ?></th>
            <th><?php echo ($obj["name"]); ?></th>
            <th><?php echo ($obj["email"]); ?></th>
            <th><?php echo ($obj["date"]); ?></th>
        </tr><?php endforeach; endif; ?>
</table>
<?php echo ($page); ?>
</body>
</html>