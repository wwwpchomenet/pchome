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
        $bool=false;
        foreach($data as $val){
            if($this->where(array('goods_id'=>$val['goods_id'],'member_id'=>session('MEMBER_INFO')['id']))->select()){
                if($this->where(array('goods_id'=>$val['goods_id']))->setInc('num',$val['num'])){
                    $bool=true;
                }
            }else{
                if($this->add($val)){
                    $bool=true;
                }
            }
        }
        return $bool;
    }
    public function getGoodsList($member_id){
        $map = array(
            'member_id'=>$member_id,
            'gl.status'=>0
        );
        return $this->distinct(true)
            ->table('goods')
            ->join('__GOODS_LIST__ as gl ON goods.`id`=gl.`goods_id`')
            ->where($map)
            ->getField('gl.id,gl.num as num,goods.name,goods.market_price'.session('MEMBER_INFO')['rank'].',goods.norintro,goods.norms,goods.logo',true);
    }
    public function goodsListDelete(){
        return $this->where(array('id'=>I('get.id')))->delete();
    }
    
     /**
     * 计算货号.
     */
    public function _calc_sn() {
            $day = date('Ymd');
            //我们需要知道当天已经创建了多少个订单了
            $goods_count_model = M('OrderDayCount');
            //如果是今天的第一个订单,就插入一条记录
            if (!($count = $goods_count_model->getFieldByDay($day, 'count'))) {
                $count = 1;
                $data  = array(
                    'day'   => $day,
                    'count' => $count,
                );
                $goods_count_model->add($data);
                //如果不是第一个订单,就执行更新操作
            } else {
                $count++;
                $goods_count_model->where(array('day' => $day))->setInc('count', 1);
            }
            return  $day . str_pad($count, 5, '0', STR_PAD_LEFT);
    }
}