<?php
error_reporting(0);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 14:53
 */
class Computer{
    public $cpu = 'amd';
    public $mainboard = '华硕9000x';
    private $hd = 1024;

    public function game($gamename=''){
        if($gamename='dnf'){
            if($this->getHd()>=1024){
                echo'你可以进入dnf世界了';
            }else{
                echo'一点b数都没有';
            }
        }
    }

    public function job($work ='写代码'){
       echo($this->game());
    }

    public function getHd(){
        return $this->hd;
    }

}

$Computer = new Computer();
var_dump($Computer->game(dnf));