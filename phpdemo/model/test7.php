<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 16:59
 */

class Test{

    public function __callStatic($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo($name."<br/>");
        print_r($arguments);
    }

}

Test::go(1,'s');