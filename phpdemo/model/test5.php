<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 16:54
 */

class test{
    private $abc = 'abc';

    public function __unset($name)
    {
       echo("__unset".$name);
        unset($this->$name);
    }
}

$test = new test();
unset($test->abc);