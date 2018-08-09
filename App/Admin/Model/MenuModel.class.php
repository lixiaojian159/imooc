<?php
namespace Admin\Model;
use Think\Model;

class MenuModel extends Model{

	public $db = '';

	public function __construct(){
		$this->db = M('menu');
	}

	public function getNavs(){
		$navs = $this->db->select();
		return $navs;
	}
}