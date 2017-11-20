<?php
namespace Home\Controller;
use Home\Event\UserEvent;
use Think\Controller;
use Think\Model;
use Think\Page;

//use Think\Model;

class UserController extends Controller
{
    public function huancun(){
        //echo C('DATA_CACHE_TYPE');
        /*if(!$list = S('list')){
            $user = D('User');
            $list = $user->select();
            S('list',$list);
        }

        if(!$list = F('list')){
            $user = D('User');
            $list = $user->select();
            F('list',$list);
        }*/

        $user = D('User');
        //$list = $user->cache(true)->select();
        // $list = $user->cache('cache_user',10)->select();
        //var_dump(S('cache_user'));
        //S('cache_user',null);
        $list = $user->select();
        $this->assign('list',$list,10);
        $this->display();
    }

    public function html(){
       /* $user = D('UserView');
        var_dump($user->group('id')->select());*/
        $user = D('User');
        $count = $user->count();
        $page = new Page($count,1);
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $show = $page->show();
        //echo $page->firstRow;
        //echo $page->listRows;
        $list = $user->limit($page->firstRow,$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function onetoone(){
        $user = D('User');
        $arr = $user->relation(true)->select();
        //var_dump($arr);
        print_r($arr);
    }

    public function addone(){
        $user = D('User');
        $data['name'] = '测试用户1';
        $data['email'] = 'test1@qq.com';
        $data['date'] = date('Y-m-d H:i:s');
        $data['card'] = array(
            'code' => '3209XX',
        );
        $user->relation(true)->add($data);
    }

    public function deleteone(){
        $user = D('User');
        $user->relation(true)->delete(9);
    }

    public function saveone(){
        $user = D('User');
        $data['name'] = '测试用户2';
        $data['email'] = 'test2@qq.com';
        $data['date'] = date('Y-m-d H:i:s');
        $data['card'] = array(
            'code' => '320922',
        );
        $user->relation(true)->where(array('id=10'))->save($data);
    }

    public function test(){
       /* $flag = false;
        if($flag){
            $this->success('新增成功','all',10);
        }else{
            $this->error('新增失败');
        }*/
        //这里和u方法一样 传递的是规则
        //$this->redirect('User/all',array('id=>5'),5,'页面跳转中...');
        //redirect('http://baidu.com',5,'页面跳转中...');
        //echo $_GET['id'];
        //echo I('get.id',1);
        //echo I('get.id','','md5');
        //print_r(I('get.'));
        //echo I('param.id');
        //print_r(I('param.'));
        print_r(I('param.0'));
    }

    public function all(){
        echo '显示所有用户';
    }

     /*public  function test($id = 1,$type){
        //$userEvent = new UserEvent();
        //$userEvent = A('User','Event'); //$userEvent = A('Admin/User','Event');
        $userEvent->test();
        echo 'id:'.$id;
    }*/


    /*public function _before_test(){
        echo '在之前执行';
    }

    public function _after_test(){
        echo '在之后执行';
    }*/

    public function user()
    {
        // $data['user'] = '都是';
        //$data['email'] = 'ds@qq.com';
        //$data['num'] = 10;

        //$data = new \stdClass();
        //$data->user = '蜡笔小新';
        //$data->email = 'lbxx@qq.com';

        //$this->assign('data',$data);
        //$this->assign('data',time());

        $user = '蜡笔小新';
        $this->assign('user',$user);
        $this->display();
    }

    public function select(){
        $user = '蜡笔小新';
        $this->assign('user',$user);
        $this->display();
    }
/*
    public function index(){
        $user = '蜡笔小新';
        $this->assign('user',$user);
        $this->display();
    }*/

    public function model(){
        $user = '蜡笔小新';
        $this->assign('user',$user);
        $this->display();
    }

    public function selec(){
        $user = M('User');
        //$user = '蜡笔小新';
        $this->assign('user',$user);
        //$this->assign('data',array('user'=>'蜡笔小新'));
        $this->assign('data',$user->select());
        $this->assign('empty','<strong style="color: red">没有数据</strong>');
        $this->assign('id',1);
        $this->display();
    }
    /*
    public function user($user,$pass){
        echo 'user:'.$user.'<br/>pass:'.$pass;
    }

    public function model(){
        //$user = new Model('user');
        //$user = M('user');
        //$user = new Model('user','think_','mysql://root:123456@localhost/thinkphptest');
        //$user = new UserModel();
        //var_dump($user->select());

        //$user = D('Admin/User');
        //var_dump($user->select());

        //$user = M();
        //var_dump($user->query("SELECT * FROM think_user WHERE name='一护'"));
        //$user = D('user');
        //var_dump($user->getDbFields());

        //$user = M('User');
        //var_dump($user->where('id = 1')->select());
        //$condition['id'] = 1;
        //$condition['name'] = '小丸子';
        //$condition['_logic'] = 'OR';
        //$condition = new \stdClass();
        //$condition->id = 1;
        //$condition->name = '一护';
        //$condition->_logic = 'OR';
        //var_dump($user->where($condition)->select());

        //$map['id'] = array('eq',1);
        //$map['id'] = array('neq',1);
        //$map['id'] = array('gt',1);
        //$map['id'] = array('egt',1);
        //$map['id'] = array('lt',1);
        //$map['id'] = array('elt',1);
        //$map['name'] = array('like','%小%');
        //$map['name'] = array('notlike','%小%');
        //$map['name'] = array('like',array('%小%','%丸%'),'AND');
        //$map['id'] = array('between','1,3');
        //$map['id'] = array('not between','1,3');
        //$map['id'] = array('between',array('1','3'));
        //$map['id'] = array('in','1,3');
        //$map['id'] = array('in',array('1','3'));
        //$map['id'] = array('not in','1,3');
        //$map['id'] = array('exp','=1');
        //$map['id'] = array('exp', '=1');
        //$map['name'] = array('exp', '="小丸子"');
        //$map['_logic'] = 'OR';
        //var_dump($user->where($map)->select());

        //$user = M('user');
        //$map['id&name'] = array(1,'小丸子', '_multi'=>true);
        //$map['id'] = array(array('gt',1),array('lt',4));
        //$map['id'] = array(array('gt',1),array('lt',4),'OR');
        //$map['id'] = array('eq',1);
        //$map['_string'] = 'name="小丸子" AND email="xiaowazi@qq.com"';
        //$map['_logic'] = 'OR';

        //$map['_query'] = 'name=小丸子&email=xiaowazi@qq.com';

        //$where['id'] = 2;
        //$map['_complex'] = $where;
        //$map['_logic'] = 'OR';

        //var_dump($user->count());
        //var_dump($user->count('email'));
        //var_dump($user->max('id'));
        //var_dump($user->min('id'));
        //var_dump($user->avg('id'));
        //var_dump($user->sum('id'));

        //var_dump($user->getByName('小丸子'));
        //var_dump($user->getFieldByName('小丸子','id'));
        //var_dump($user->query("SELECT * FROM think_user"));
        //var_dump($user->execute("UPDATE think_user SET name='蜡笔大新' WHERE id = 1"));

        //var_dump($user->where('id>1')->order('date DESC')->limit(2)->select());
        //var_dump($user->select(array('where'=>array('id'=>array('neq',1)),'order'=>'date DESC','limit'=>2)));
        //var_dump($user->where('id in (1,2,3,4)')->find());

        $user = D('User');
        //var_dump($user->scope('sql1')->select());
       //var_dump($user->scope('sql2')->select());
    }

    public function create(){
        //$user = M('User');
        //$data['name'] = $_POST['name'];
        //$data['email'] = $_POST['email'];
        //$data['date'] = date('Y-m-d H:i:s');

        //$data = new \stdClass();
        //$data->name = $_POST['name'];
        //$data->email = $_POST['email'];
        //$data->date = date('Y-m-d H:i:s');
        //var_dump($user->field('name')->create());//限制数据
        //$user = D('User');
        //var_dump($user->create());
    }

    public function add(){
        //$user =  M('User');
        //$data['name'] = '刘鹏';
        //$data['email'] = 'lp@qq.com';
        //$data['date'] = date('Y-m-d H:i:s');
        //$user->add($data);

        $user =  M('User');
        $data = $user->create();
        $data['date'] = date('Y-m-d H:i:s');
        $user->data($data)->add();
    }

    public function select(){
        $user = M('User');
        //var_dump($user->select());
        //var_dump($user->find());
        //var_dump($user->getField('name'));
        //var_dump($user->getField('name',true));
        //var_dump($user->getField('name,email'));//重复的屏蔽
        //var_dump($user->getField('id,name,email',':'));
        var_dump($user->getField('id,name,email',2));
    }

    public function save(){
        $user = M('User');
        //$data['name'] = '蜡笔大新';
        //$data['email'] = 'daxin@163.com';
        //$map['id'] = 1;
        //$user->where($map)->save($data);

        $data['id'] = 1;
        $data['name'] = '蜡笔老新';
        $data['email'] = 'laoxin@163.com';
        $user->save($data);
    }*/
}