
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/20
 * Time: 13:49
 */
$to = "1424964313@qq.com";//收件人
$subject = "Test";//邮件主题
$message = "This is a test mail!";//邮件正文
ini_set('SMTP','smtp.163.com');//发件SMTP服务器
ini_set('smtp_port',25);//发件SMTP服务器端口
ini_set('sendmail_from',"admin@163.com");//发件人邮箱
mail($to,$subject,$message);