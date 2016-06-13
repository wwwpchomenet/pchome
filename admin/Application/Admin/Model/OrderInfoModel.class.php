<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/6/8
 * Time: 11:13
 */

namespace Admin\Model;


use Think\Model;

class OrderInfoModel extends Model{
    /**
     * 订单列表
     * @param $cond
     * @return array
     */
    public function getOrder($cond){
        $count     = $this->where($cond)->count();
        //获取页尺寸
        $size      = C('PAGE_SIZE');
        $page_obj  = new \Think\Page($count, $size);
        $page_obj->setConfig('theme', C('PAGE_THEME'));
        $page_html = $page_obj->show();
        $rows      = $this->where($cond)->page(I('get.p'), $size)->group("order_num")->select();
        return array(
            'rows'      => $rows,
            'page_html' => $page_html,
        );
    }

    /**
     * 订单详情
     * @param $orderNum
     * @return array
     */
    public function getGoods($orderNum){
        $goodsList=$this->where('order_num='.$orderNum)->select();
        $goods=array();
        foreach($goodsList as $val){
           $data=$this->table('Goods_list')->where(array('id'=>$val['list_id']))->find();
            $goods[]=$this->table('Goods')->where(array('id'=>$data['goods_id']))->find();
            foreach($data as $v){
            }
        }
       return $goods;
    }
}