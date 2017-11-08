<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 16:39
 */

class test{
    private $abc = '';
    private $cba = '';

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}

$test = new test();
$test->abc = 'abcc';
var_dump($test->abc);