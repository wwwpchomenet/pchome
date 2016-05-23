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
            $count=$this->count();
            $rand=mt_rand(0,$count-1); //产生随机数。
            return  $this->limit($rand,6)->order("inputtime desc")->select();
        }
      return  $this->where(array('goods_category_id'=>$id))->limit(6)->order("inputtime desc")->select();
    }
}