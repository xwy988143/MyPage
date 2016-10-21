<?php

namespace Web\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {
    	$data = M('person')->find();
    	$skills = $data['tags'];
    	$skills = substr($skills, 0, -1);
        $skills = explode(',', $skills);

        $this->assign('data',$data);
        $this->assign('skills',$skills);
        $this->display();
    }
}