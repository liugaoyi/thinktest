<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 17:01
 */

class Test{
    public function __invoke($arg)
    {
       var_dump($arg);
    }

    public function __toString()
    {
        return "hello...";
    }
}

$test = new test();
$test('go...');

echo ($test);