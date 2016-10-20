<?php

namespace Home\Model;
use Think\Model\RelationModel;

class ArticleModel extends RelationModel{
    protected $tableName = 'passage';

    //添加信息
    public function addInfo($info)
    {
        return $this->add($info) ? true : false;
    }
    //获取全部信息
    public function getAll($condition='id')
    {
        return $this->order("$condition desc")->select();
    }
    //获取单条信息
    public function getOneInfo($where)
    {
        return $this->where($where)->find();
    }
    //修改信息
    public function updateInfo($where, $info)
    {
        return $this->where($where)->save($info) ? true : false;
    }
}