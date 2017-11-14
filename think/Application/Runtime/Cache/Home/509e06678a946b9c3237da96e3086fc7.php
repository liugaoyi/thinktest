<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!--
    <?php if($user == '蜡笔小新'): ?>小新
        <?php elseif($user == '小新'): ?>
            一护
        <?php else: ?>
         错误<?php endif; ?>
    <?php if(mb_substr($user,0,3,'UTF-8') == '蜡笔小新'): ?>小新<?php endif; ?>
    <?php if($data["user"] == '蜡笔小新'): ?>小新<?php endif; ?>
    <?php if($data['user'] == '蜡笔小新'): ?>小新<?php endif; ?>
    <?php if($data["user"] == '蜡笔小新'): ?>小新<?php endif; ?>
    <?php if($_GET['user']== '蜡笔小新'): ?>小新<?php endif; ?>
    <?php switch($user): case "蜡笔小新": ?>小新<?php break;?>
        <?php case "黑崎一护": ?>一护<?php break;?>
        <?php default: ?>错误<?php endswitch;?>
    <?php if(($user) == "蜡笔小新"): ?>小新<?php endif; ?>
    <?php if(($user) == "蜡笔小新"): ?>小新<?php endif; ?>

    <?php if(in_array(($id), explode(',',"1,2,3"))): ?>id是其中一个
        <?php else: ?>
        id不是其中一个<?php endif; ?>
    <?php $_RANGE_VAR_=explode(',',"1,10");if($id>= $_RANGE_VAR_[0] && $id<= $_RANGE_VAR_[1]):?>id在指定的范围内<?php endif; ?>
    <?php $_RANGE_VAR_=explode(',',"1,10");if($id<$_RANGE_VAR_[0] || $id>$_RANGE_VAR_[1]):?>id在指定的范围内<?php endif; ?>

    <?php $_RANGE_VAR_=explode(',',"1,10");if($id>= $_RANGE_VAR_[0] && $id<= $_RANGE_VAR_[1]):?>id在指定的范围内
        <?php else: ?>
        id不在指定的范围内<?php endif; ?>
    <?php if(in_array(($id), explode(',',"1,2,3"))): ?>id是其中一个<?php endif; ?>

    <?php if(in_array(($id), explode(',',"1,2,3"))): ?>id是其中一个
        <?php else: ?>
        id不是其中一个<?php endif; ?>

    <?php if(in_array(($_GET['id']), explode(',',"1,2,3"))): ?>id是其中一个<?php endif; ?>

    <?php if(in_array(($id), is_array($_GET['arr'])?$_GET['arr']:explode(',',$_GET['arr']))): ?>id是其中一个<?php endif; ?>

    <?php if(isset($user)): ?>user已存在<?php endif; ?>
    <?php if(!isset($user)): ?>user不存在<?php endif; ?>
    <?php if(isset($user)): ?>user已存在
        <?php else: ?>
        user不存在<?php endif; ?>
    <?php if(isset($_GET['user'])): ?>$_GET['user']已存在<?php endif; ?>

-->

    <ul>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><li><?php echo ($arr["id"]); ?> -- <?php echo ($arr["name"]); ?> -- <?php echo ($arr["email"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</body>
</html>