<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/16
 * Time: 14:53
 */
namespace Home\Event;

class UserEvent{
    public function test(){
        echo '这是Event，不对外公开，属于内部调用';
    }
}