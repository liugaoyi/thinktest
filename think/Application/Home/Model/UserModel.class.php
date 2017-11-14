<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/10
 * Time: 15:35
 */
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
    /*protected $fields = array('id','user','_pk'=>'id');

    //protected $insertFields = 'name';
    //protected $updateFields = 'name';

    protected $_validate = array(
        array('name','require','用户名不得为空',0,'regex',3),
        array('name','email','邮箱格式不正确'),
        array('name','url','URL格式不合法'),
    );

    protected $_scope = array(
        'sql1'=>array(
            'where'=>array('id'=>1),
        ),
        'sql2'=>array(
            'order'=>array('date'=>'DESC'),
            'limit'=>2,
        ),
        'default'=>array(
            'where'=>array('id'=>2),
        ),
    );

    public function  __construct()
    {
        parent::__construct();
        echo '\Home';
    }*/
}
