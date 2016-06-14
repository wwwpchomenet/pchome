<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/21
 * Time: 10:50
 */

namespace Admin\Model;
use Think\Model;

/**
 * 商品分类
 * Class GoodsCategoryModel
 * @package Admin\Model
 */
class GoodsCategoryModel extends Model{
    /**
     *
     * @return 商品的顶级菜单
     */
    public function getGoods(){
       $goods= $this->where(array('parent_id'=>0))->getField('id,name',true);
        $data=array(0=>'全部');
        foreach($goods as $key=>$val){
            $data[$key]=$val;
        }
        return $data;
    }
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
     * 二级分类
     * @param array $cont  准备条件
     * @return array   返回的结果
     */
      public function getSecond(array $cont){
        return $this->where($cont)->order('sort')->limit(20)->select();
    }
    
    /**
     * 商品列表展示
     * @param array $cont  查询条件
     * @return array   返回的结果
     */
     public function  getThree(array $cont){
         return $this->where($cont)->order('sort')->select();
     }
}