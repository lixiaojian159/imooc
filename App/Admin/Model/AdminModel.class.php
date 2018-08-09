<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{

	public $db = '';

	public function __construct(){
		$this->db = M('admin');
	}

	public function getAdminByUsername($username){
		$user = $this->db->where("username = '$username'")->find();
		return  $user;
	}
}