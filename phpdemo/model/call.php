<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 16:56
 */

class Test{

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo($name."<br/>");
        print_r($arguments);
    }

}

$test = new test();
$test->go('s');