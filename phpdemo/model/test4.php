<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 16:51
 */

class test{
    private $abc = 'abc';

    public function __isset($name)
    {
       return isset($this->$name)?true:false;
    }
}

$test = new test();
var_dump(isset($test->abc));