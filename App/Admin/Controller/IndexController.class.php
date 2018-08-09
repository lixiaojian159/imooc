<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
    	$navs = D('menu')->getNavs();
    	$this->assign('navs',$navs);
        $this->display('Index/index');
    }

    public function cate(){
    	$user = D('menu')->getNavs();
    	dump($user);
    }
}