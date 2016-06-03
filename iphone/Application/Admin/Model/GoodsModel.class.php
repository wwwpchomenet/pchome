<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/23
 * Time: 10:15
 */

namespace Admin\Model;
use Think\Model;

/**
 * 获取商品信息
 * Class GoodsModel
 * @package Admin\Model
 */
class GoodsModel extends Model{
    public function getGoods($id){
        if($id==0){
            return  $this->where(array('website'=>1))->limit(6)->order("inputtime desc")->select();
        }
      return  $this->where(array('goods_category_id'=>$id,'website'=>1))->limit(6)->order("inputtime desc")->select();
    }
    public function getList($id){
        return $this->where(array('goods_category_id'=>$id))->order("inputtime desc")->select();
    }

    /**
     * 根据 条件模糊查询   或者查询所有商品
     * @return 商品的所有查询结果
     */
    public function getAll(){
        if(IS_GET){
            $name=I('get.name');
            $where['name']=array('like',"%$name%");
            $search=$this->where($where)->select();
            return $search;
        }
        return $this->order('inputtime asc')->limit(1000)->select();
    }
}