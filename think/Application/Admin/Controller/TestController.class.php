<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/14
 * Time: 9:45
 */

namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller{
    public function test(){
       //$var = date('Y-m-d H:i:s',time());
       //变量分配
       //$this -> assign('var' ,$var);

       //$this -> display();//展示模板
       //$str =  $this -> fetch();//获取模板（有返回值）
        //dump($str);

       //一维数组
       $array = array('西游记','三国演义','红楼梦','水浒传');

       //定义二位数组
       $array2 = array(
         array('唐僧','孙悟空','猪八戒','沙僧'),
         array('宋江','孙二娘','林冲','李逵'),
         array('贾宝玉','林黛玉','薛宝钗','刘姥姥'),
         array('曹操','刘备','孙权','诸葛亮'),
       );

       //变量分配
       $this -> assign('array',$array);
       $this -> assign('array2',$array2);
       //展示模板
       $this -> display();
   }

    public function  test2(){
        $stu = new Student();
        $stu -> id = 100;
        $stu -> name = '马冬梅';
        $stu -> sex = '女';
        //变量分配
        $this -> assign('stu',$stu);
        //展示模板
        $this -> display();
    }

    public function test3(){
        $this -> display();
    }

    public function  test4(){
        $time = time();
        $str = 'ascfhhdssdsasa';
        $this -> assign('time',$time);
        $this -> assign('str',$str);
        //展示模板
        $this -> display();
    }

    //默认值
    public function test5(){
        $sign = '';
        $sign = $sign ? :'这个家伙很懒...';
        $this -> assign('sign',$sign);
        $this -> display();
    }

    //运算符
    public function  test6(){
        $a = 100;
        $b = 10;
        $this -> assign('a',$a);
        $this -> assign('b',$b);
        $this -> display();
    }

    public function header(){
        $this -> display();
    }

    public function body(){
        $this -> display();
    }

    public function footer(){
        $this -> display();
    }

    //数组遍历
    public function test7(){
        //一维数组
        $array = array('西游记','三国演义','红楼梦','水浒传');

        //定义二位数组
        $array2 = array(
            array('唐僧','孙悟空','猪八戒','沙僧'),
            array('宋江','孙二娘','林冲','李逵'),
            array('贾宝玉','林黛玉','薛宝钗','刘姥姥'),
            array('曹操','刘备','孙权','诸葛亮'),
        );

        //变量分配
        $this -> assign('array',$array);
        $this -> assign('array2',$array2);
        //展示模板
        $this -> display();
    }

    //if标签
    public function test8(){
        $day = date('N',time());
        //传递给模板
        $this -> assign('day',$day);
        $this -> display();
    }

}