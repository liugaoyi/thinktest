<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en" xmlns:html="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--
        <script type="text/javascript" src="/thinktest/think/Public/js/selec.js"></script>
        <link rel="stylesheet" type="text/css" href="/thinktest/think/Public/css/selec.css"/>

        <script type="text/javascript" src="./Common/js/selec.js"></script>
        <link rel="stylesheet" type="text/css" href="/thinktest/think/Public/css/selec.css" />

        <script type="text/javascript" src="/thinktest/think/Public/js/selec.js"></script>
        <link rel="stylesheet" type="text/css" href="/thinktest/think/Public/css/selec.css" />

        <script type="text/javascript" src="/thinktest/think/Public/js/selec.js"></script>
        <link rel="stylesheet" type="text/css" href="/thinktest/think/Public/css/selec.css" />
    -->
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

     <ul>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><li><?php echo ($arr["id"]); ?> -- <?php echo ($arr["name"]); ?> -- <?php echo ($arr["email"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

     <ul>
        <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($k % 2 );++$k;?><li><?php echo ($k); ?>.<?php echo ($arr["id"]); ?> -- <?php echo ($arr["name"]); ?> -- <?php echo ($arr["email"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

    ul>
        <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($k % 2 );++$k; if(($mod) == "1"): ?><li><?php echo ($k); ?>.<?php echo ($arr["id"]); ?> -- <?php echo ($arr["name"]); ?> -- <?php echo ($arr["email"]); ?></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>

    <ul>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><li><?php echo ($i); ?>.<?php echo ($arr["id"]); ?> -- <?php echo ($arr["name"]); ?> -- <?php echo ($arr["email"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

    <ul>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><li><?php echo ($key); ?>.<?php echo ($arr["id"]); ?> -- <?php echo ($arr["name"]); ?> -- <?php echo ($arr["email"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

    <ul>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><li><?php echo ($key); ?>.<?php echo ($arr["id"]); ?> -- <?php echo ($arr["name"]); ?> -- <?php echo ($arr["email"]); ?></li><?php endforeach; endif; else: echo "没有数据" ;endif; ?>
    </ul>

    <ul>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><li><?php echo ($key); ?>.<?php echo ($arr["id"]); ?> -- <?php echo ($arr["name"]); ?> -- <?php echo ($arr["email"]); ?></li><?php endforeach; endif; else: echo "$empty" ;endif; ?>
    </ul>

    <ul>
        <?php if(is_array($data)): foreach($data as $key=>$arr): ?><li><?php echo ($key); ?>.<?php echo ($arr["id"]); ?> -- <?php echo ($arr["name"]); ?> -- <?php echo ($arr["email"]); ?></li><?php endforeach; endif; ?>
   </ul>

   <?php $__FOR_START_5388__=1;$__FOR_END_5388__=100;for($k=$__FOR_START_5388__;$k < $__FOR_END_5388__;$k+=2){ echo ($k); ?><br/><?php } ?>

     <?php $var = '123'; ?>
    <?php echo ($var); ?>
    //模板变量
    <?php define('MY_NAME', '456'); ?>
    <?php echo (MY_NAME); ?>
    //模板常量

    <?php echo 1+2; ?>

    <?php
 echo 1+3; ?>

    
        <php>
            echo 1+2;
        </php>
    

    <html:select options="name" selected="value"/>
-->

    <div style="color:red;border:5px solid #ccc">测试标签</div>
</body>
</html>