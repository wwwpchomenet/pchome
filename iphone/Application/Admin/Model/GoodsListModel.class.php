<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/25
 * Time: 11:30
 */

namespace Admin\Model;


use Think\Model;

/**
 * 商品清单
 * Class GoodsListModel
 * @package Admin\Model
 */
class GoodsListModel extends Model{
    /**
     * 添加用户所有清单
     * @return bool|string
     */
    public function setGoodsList($data){
        return $this->addAll(I('post.'));
    }
    public function getGoodsList($member_id){

        return $this->distinct(true)
            ->table('goods')
            ->join('__GOODS_LIST__ as gl ON goods.`id`=gl.`goods_id`')
            ->where(array('member_id'=>$member_id))
            ->getField('gl.id,gl.num,goods.name,goods.market_price,goods.norintro,goods.norms,goods.logo',true);
    }
    public function goodsListDelete(){
        return $this->where(array('id'=>I('get.id')))->delete();
    }
}