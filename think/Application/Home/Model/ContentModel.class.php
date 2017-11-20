<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/20
 * Time: 16:03
 */
namespace Home\Model;
use Think\Model;
use Think\Model\RelationModel;

class ContentModel extends RelationModel{

    protected $_link = array(
        'User'=>array(
            'mapping_type'=>self::BELONGS_TO,
            'foreign_key'=>'uid',
            'mapping_fields'=>'name',
            'as_fields'=>'name',
        ),
    );
}