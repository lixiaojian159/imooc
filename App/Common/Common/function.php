<?php
/**
 * 公共函数库
 */

function show($status,$message,$data=[]){
	$arr = [
		'status' => $status,
		'message'=> $message,
		'data'   => $data
	];

	exit(json_encode($arr));
}

/**
 * 获取加密后的密码
 */

function getMd5Password($password){
	return md5($password.C('MD5_PRE'));
}