<?php
namespace Admin\Controller;
use Think\Controller;

class MenuController extends Controller{

	public function index(){
		$navs = D('menu')->getNavs();
    	$this->assign('navs',$navs);
		$this->display('menu/index');
	}
}