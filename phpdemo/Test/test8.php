<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 15:16
 */

class Computer{
    const yes = true;
    const no = false;
    const  one = 1;
    const  two = self::one+1;
    const  three = self::two+1;
}

var_dump(Computer::three);