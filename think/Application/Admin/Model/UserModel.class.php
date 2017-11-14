<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/10
 * Time: 15:35
 */
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
    //protected $tablePrefix = 'tp_';
    //protected $tableName = 'abc';
    //protected $trueTableName = 'tp_abc';
    //protected $dbName = 'thinkphp';

    public function  __construct()
    {
        parent::__construct();
        echo '\Admin';
    }
}
