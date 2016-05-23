<?php

/**
 * Description:微信端商品
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Model;

class GoodsCategoryModel extends \Think\Model{
    
    /**
     * 查询商品分类
     * 1.parent_id为0的,一级
     * 2.status状态为1的
     * 3.排序,数字越小,越排在前面
     * 4.限制分类结果为4条数据
     * @param array $cond  查询条件
     * @return array 查询结果集
     */
    public function getList(array $cond){
        return $this->where($cond)->order('sort')->limit(4)->select();
    }
    /**
     * 
     * @param array $cont  准备条件
     * @return array   返回的结果
     */
      public function getsecond(array $cont){
        return $this->where($cont)->order('sort')->limit(20)->select();
    }
}
