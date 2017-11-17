<?php
namespace Home\Controller;

use Think\Controller;
use Think\Image;
use Think\Verify;

class IndexController extends Controller
{
    public function yuyan(){
        $this->display();
    }

    public function lang(){
        setcookie('think_language','en-us');
    }

    public function wjsc(){
        $this->display();
    }

    public function upload(){
        $config = array(
            'maxSize'    =>    100,
            'rootPath'   =>    './Uploads/',
            'savePath'   =>    '',
            'saveName'   =>    array('uniqid',''),
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub'    =>    true,
            'subName'    =>    array('date','Ymd'),
        );

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     './'; // 设置附件上传（子）目录
        //$upload->saveName = '123';
        //$upload->replace = true;
        //$upload->autoSub = false;//不设置子目录
        //$upload->subName = 'abc';
        //$upload->subName = array('date','Ymd');
        //$upload->subName = 'get_user_id';
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            //$this->success('上传成功！');
            foreach($info as $file){
                //echo $file['savepath'].$file['savename'];
                /*
                echo $file['key'].'<br/>';
                echo $file['savepath'].'<br/>';
                echo $file['name'].'<br/>';
                echo $file['savename'].'<br/>';
                echo $file['size'].'<br/>';
                echo $file['type'].'<br/>';
                echo $file['ext'].'<br/>';
                echo $file['md5'].'<br/>';
                echo $file['sha1'].'<br/>';
                */
            }
        }
    }

    public function yzma(){
       /* $config = array(
            'fontSize'=> 50,
            'length' => 5,
            'useNoise' => false,
        );*/
        //$verfiy = new Verify($config);
        $verfiy = new Verify();
        //$verfiy->entry(1);
        //$verfiy->entry(2);
        //$verfiy->fontttf='5.ttf';
        //$verfiy->useImgBg = true;
        //$verfiy->useCurve = false;
        //$verfiy->imageH = 100;
        //$verfiy->imageW = 100;
        //$verfiy->bg = array(200,200,200);
        //$verfiy->fontttf = 'DFPShaoNvW5-GB.ttf';
        //$verfiy->useZh = true;
        //$verfiy->zhSet = '谁说的技术开发就';
        //$verfiy->codeSet = '0123456789';
        $verfiy->entry();
    }

    public function index()
    {
        //echo C('my_config',null,'default_config');
        //echo C('USER_AUTH_ID');
        //$config = array('WEB_SITE_TITLE'=>'ThinkPHP','WEB_SITE_DESCRIPTION'=>'开源PHP框架');
        //C($config);
        //echo C('WEB_SITE_TITLE');
        $image = new Image();
        //$image = new Image('Imagick');//未安装imagick库
        //$image = new Image(Image::IMAGE_IMAGICK);
        $image->open('./Public/1.jpg');
        //$arr['width'] = $image->width();
        //$arr['height'] = $image->height();
        //$arr['type'] = $image->type();
        //$arr['mime'] = $image->mime();
        //$arr['size'] = $image->size();
        //var_dump($arr);

        //$image->crop(400,400)->save('./Public/2.jpg');
        //$image->crop(400,400,200,0)->save('./Public/3.jpg');
        //$image->crop(400,400,200,0,200,200)->save('./Public/3.jpg');
        //$image->thumb(300,300)->save('./Public/3.jpg');
        //$image->thumb(300,300,5)->save('./Public/3.jpg');
        //$image->water('./Public/logo.png',1,30)->save('./Public/3.jpg');
        //$image->text('jdys.com','./Public/DFPShaoNvW5-GB.ttf',20,'#ffffff',1)->save('./Public/3.jpg');
    }

    public function sess(){
        //session('user','mr.lee');
        //session('member','ok');
        //session('user',null);
        //session(null);
        //session('[pause]');//暂停session
        //session('[start]');//启动session
        //session('[destroy]');//销毁session
        //session('[regenerate]');//重新生成session_id
        //cookie('user','mr.lee');
        //cookie('user','mr.lee',3600);
        //cookie('user','mr.lee',array('expire'=>3600, 'prefix'=>'think_'));
        //cookie('user',array('Mr.','Lee'));
        //cookie('user',null);
        //cookie(null);
        //cookie('null','think_');
    }

    public function test(){
        //echo session('user');
        //echo cookie('user');
        //echo cookie('think_user');
        //print_r(cookie('user'));
        //print_r($_SESSION);
        $code = I('get.code');
        var_dump(check_verify($code));
    }
}