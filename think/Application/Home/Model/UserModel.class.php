<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/10
 * Time: 15:35
 */
namespace Home\Model;
use Think\Model;
use Think\Model\RelationModel;

class UserModel extends RelationModel{

    protected $_link = array(
        'card'=>array(
            'mapping_type' => self::HAS_ONE,
            'foreign_key'=>'uid',
            //'class_name' => 'card',
            //'mapping_name' => 'abc',
            'mapping_fields'=>'code',
            'as_fields'=>'code',
            //'condition'=>'id=1',
        )

        /*
        'Content'=>array(
            'mapping_type'=>self::HAS_MANY,
            'foreign_key'=>'uid',
            'class_name'=>'Content',
            'mapping_name'=>'contents',
            'mapping_fields'=>'content',
            'mapping_limit'=>'0,2',
            'mapping_order'=>'id DESC',
        ),

        'Cole'=>array(
            'mapping_type' => self::MANY_TO_MANY,
            'relation_table'=>'think_group',
            'foreign_key'=>'uid',
            'relation_foreign_key'=>'gid',
        ),*/
    );

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
