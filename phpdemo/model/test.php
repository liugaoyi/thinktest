<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 16:05
 */

include '1.php';
include '2.php';

//var_dump(new venter\imooc());
//var_dump(new venter\session\imooc());

//\venter\ilike();
//echo(venter\session\cc);

use venter\session\imooc;
use venter\imooc as imooc2;

use function venter\ilike;
use const venter\session\cc;
var_dump(cc);
ilike();

var_dump(new imooc());
var_dump(new imooc2());