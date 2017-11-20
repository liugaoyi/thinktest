<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/10
 * Time: 15:35
 */
namespace Home\Model;
use Think\Model\ViewModel;

class UserViewModel extends ViewModel{
    protected  $viewFields = array(
        'User' => array('id','name','email','_type'=>'LEFT'),
        //'Card'=> array('code','_on'=>'User.id= Card.uid'),
        'Content'=>array('_on'=>'User.id= Content.uid'),
    );
}
