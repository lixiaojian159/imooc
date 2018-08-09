<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{

    //登陆页
    public function index()
    {
        $this->display('login/index');
    }

    //登陆逻辑
    public function check()
    {
        $username = trim(I('post.username'));
        $password = trim(I('post.password'));
        if (!$username) {
            return show(0, '用户名不能为空');
        }
        if (!$password) {
            return show(0, '密码不能为空');
        }

        $ret = D('admin')->getAdminByUsername($username);

        if (!$ret) {
            return show(0, '用户名不存在');
        }

        if ($ret['password'] != getMd5Password($password)) {
            return show(0, '密码错误');
        }

        session('adminUser', $ret);

        return show(1, '登陆成功', '/imooc/index.php/admin/index/index');
    }

    //退出
    public function logout()
    {
        session('adminUser', null);
        $this->redirect('/admin/login/index');
    }
}
