<?php
namespace Home\Controller;


class AdminController extends CommonController
{
//    public function _initialize()
//    {
//        echo "hello";
//    }

    public function list()
    {

        $this->display();
    }

    //显示文章列表
    public function article()
    {
    	$this->display();
    }
    
    //发布文章界面
    public function publish()
    {
        $this->display();
    }

    //发布文章动作
    public function doPublish()
    {
        $article = D('Article'); //实例化数据表

        $data['title']=I('title');
        $data['content']=I('content');
        $data['type']=I('type');
        $data['status']=I('status');
        $data['time']=time();

        if($article->addinfo($data))
        {
            $this->ajaxReturn(true);
        }else{
            $this->ajaxReturn(false);
        }

    }
    //获取文章信息
    public function getArticle()
    {
        $page = get_page_val();
        $where = "title like '%{$page['keyword']}%'";
        $count = M('passage')->where($where)->count();
        $rs = M('passage')->where($where)->limit($page['page'], $page['pageSize'])->order('id DESC')->select();
        foreach($rs as $key=>$value){
            $rs[$key]['time'] = date('Y-m-d', $value['time']);
            $rs[$key]['status']=$value['status']=='0'?"未启用":"启用";
        }
        $lists = set_page_val(array('count'=>$count,'lists'=>$rs));
        return_json($lists);
    }

    //获取爬虫信息
    public function news()
    {
        //76179526c9d735fea3521c387b437078
        $ch = curl_init();
        $url = 'http://apis.baidu.com/txapi/tiyu/tiyu?num=10';
        $header = array(
            'apikey: 76179526c9d735fea3521c387b437078',
        );
        // 添加apikey到header
        curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 执行HTTP请求
        curl_setopt($ch , CURLOPT_URL , $url);
        $res = curl_exec($ch);
        //将json数组转换成PHP关联数组
        $data=json_decode($res,true);

        $this->assign('res',$data['newslist']);
        $this->display();
    }

    //文章的详情和修改展示
    public function editArticle()
    {
        $condtion['id']=$_GET['id'];
        $article = D('Article');
        $data = $article->getOneInfo($condtion);

        $this->assign('data',$data);
        $this->display();

    }

    public function doEdit()
    {
        if(IS_AJAX)
        {
            $id=$_POST['id'];
            if(!empty($id))
            {
            //接收修改数据
              $data['type']=I('type');
                $data['title']=I('title');
                $data['status']=I('status');
                $data['content']=I('content');
                $map['id']=$id;
              $article = D('Article');
                $bool=$article->updateInfo($map,$data);
                if($bool)
                {
                    $this->ajaxReturn(true);
                }else{
                    $this->ajaxReturn(false);
                }
            }else{
              $this->ajaxReturn(false);
            }
        }
    }

}