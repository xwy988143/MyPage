<?php

function check_verify($code,$id=""){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}


function request($method,$url,$object=null)
{
    if(!in_array($method,['post','get'])||empty($url))
    {
        return false;
    }
    $ch = curl_init(); //开启CURL
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);//关闭SSL请求
    curl_setopt($ch,CURLOPT_URL,$url);//设置API的URL
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//设置返回数据，不直接输出
    curl_setopt($ch,CURLOPT_HEADER,0);//设置请求头
    if($method=='post')
    {
        curl_setopt($ch,CURLOPT_POST,1); //开启POST
        curl_setopt($ch,CURLOPT_POSTFIELDS,$object);  //设置POST数据
    }
    $data=curl_exec($ch); //执行CURL
    curl_close($ch); //关闭CURL
    return $data;  //返回数据
}

/**
 * 成功返回
 * @Date   2015-09-25
 * @param  string     $info 提示信息
 * @param  string     $url  跳转地址
 * @param  array      $data 返回数据
 * @return json           json对象
 */
function success($info='', $url='', $data=array()){
    $d['status'] = 'success';
    $d['info']   = $info ? $info : '操作成功！';
    $d['url']    = $url;
    $d['data']   = $data;
    return_json($d);
}

/**
 * 失败返回
 * @Date   2015-09-25
 * @param  string     $info 提示信息
 * @param  string     $url  跳转地址
 * @param  array      $data 返回数据
 * @return json           json对象
 */
function failed($info='', $url='', $data=array()){
    $d['status'] = 'failed';
    $d['info']   = $info ? $info : '操作失败！';
    $d['url']    = $url;
    $d['data']   = $data;
    return_json($d);
}

/**
 * 返回json对象
 * @Date   2015-09-25
 * @param  array     $data 数组数据
 * @return json           json对象
 */
function return_json($data)
{
    echo is_array($data) ? json_encode($data) : $data;
    exit;
}

function get_page_val(){
    $post['keyword']  = str_replace("'", "", I('sSearch'));
    $post['page']     = I('iDisplayStart');
    $post['pageSize'] = I('iDisplayLength');
    return $post;
}

/**
 * 设置datatables分页数据
 * @Date   2015-10-27
 * @return json
 */
function set_page_val($array){
    $json['iTotalRecords'] = $array['count'];
    $json['iTotalDisplayRecords'] = $array['count'];
    $json['data'] = $array['lists'];
    return json_encode($json);
}
