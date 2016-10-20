<?php

namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{

    public function index(){
        $this->display('login');
    }


    public function doLogin()
    {
        $username="xwywff@163.com";                          //xiaowenyu
        $password="59d0505df24d48620bf958757706df5e";   //xiaowenyu

        $usernm=I('username');
        $passwd=md5(I('password'));

        //检查是否登陆,为空则跳转到登陆页面
        if(empty($usernm) || empty($passwd))
        {
            $this->redirect('index');
        }
        //
        if($username==$usernm && $password==$passwd)
        {
            session("username",$usernm);
            $this->redirect('Admin/list');
        }else
        {
            $this->error('登录失败');
        }
    }

    public function Logout()
    {
        session(null);
    }
}