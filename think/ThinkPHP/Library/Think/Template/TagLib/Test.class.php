<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/14
 * Time: 17:33
 */
namespace Think\Template\TagLib;
use Think\Template\TagLib;


/*
 * Test 自定义标签库
 * */

class Test extends  TagLib{
     protected  $tags = array(
         'mytest' =>array('attr'=>'color,border','close'=>1),
     );

    public function _mytest($tag,$content){
        $color='';
        $border='';
        if(isset($tag['color'])){
            $color = 'color'.$tag['color'].';';
        }
        if(isset($tag['border'])){
            $border = 'border:'.$tag['border'].'px solid #ccc';
        }
        $css = $color.$border;
        return '<div style="'.$css.'">'.$content.'</div>';
    }
}