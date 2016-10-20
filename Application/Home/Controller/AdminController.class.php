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

        $data['title']  = I('title');
        $data['content']= I('content');
        $data['type']   = I('type');
        $data['status'] = I('status');
        $data['sort']   = I('sort');
        $data['time']   = time();

        if($article->addinfo($data))
        {
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
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
        $map['id'] = $_POST['id'];
        $data['type'] = I('type');
        $data['title'] = I('title');
        $data['status'] = I('status');
        $data['content'] = I('content');
        $data['sort'] = I('sort');
        $article = D('Article');
        $bool=$article->updateInfo($map,$data);
        if($bool){
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }

    public function delArticle()
    {
        $map['id'] = $_GET['id'];
        $res = D('Article') -> where($map) -> delete();
        if($res){
            $this->success('删除成功');
        }
    }

    public function profile()
    {

        if(IS_POST){
            $datas = I('tags');
            $tags="";
            foreach($datas as $key => $value) {
                $tags .= $value . ',';
            }
            $data['name'] = I('name');
            $data['position'] = I('position');
            $data['tags'] = $tags;
            $data['degree'] = I('degree');
            $data['description'] = I('description');
            $data['background'] = I('background');
            $res = M('person') -> add($data);
            if($res){
                $this->success('成功');
            }else{
                $this->error('失败');
            }
        }else{
            $this->display();
        }
    }
}