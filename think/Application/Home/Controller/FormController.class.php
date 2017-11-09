<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/12
 * Time: 11:20
 */
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
    public function insert(){
        $Form   =   D('Form');
        if($Form->create()) {
            $result =   $Form->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($Form->getError());
        }
    }

    public function read($id=6){
        $Form   =   M('Form');
        // 读取数据
        $data =   $Form->find($id);
        if($data) {
            $this->assign('data',$data);// 模板变量赋值
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }

    public function edit($id=0){
        $Form   =   M('Form');
        $this->assign('vo',$Form->find($id));
        $this->display();
    }
    public function update(){
        $Form   =   D('Form');
        if($Form->create()) {
            $result =   $Form->save();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Form->getError());
        }
    }

    public function delete(){
        //
        //$Form = M('Form');
        //$Form->delete(5);

        $Form = M("Form");
        $Form->delete('2,3,4');
    }
}