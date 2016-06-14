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
    public function getOrder($cond,$del){
        $count= $this->table('__ORDER_INFO__')->query('select count(*) as id from(select id,count(*) counts from order_info   where `del`="'.$del.'" group by `order_num`) t')[0]['id'];
        //获取页尺寸
        $size      = C('PAGE_SIZE');
        $page_obj  = new \Think\Page($count, $size);
        $page_obj->setConfig('theme', C('PAGE_THEME'));
        $page_html = $page_obj->show();
        $rows      = $this->where($cond)->page(I('get.p'), $size)->group("order_num")->select();
        return array(
            'rows'       => $rows,
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
        foreach($goodsList as $k=>$val){
            $goods[$k]=$this->table('Goods_list as gl')
                ->join('__ORDER_INFO__ as oi ON gl.`id`=oi.`__LIST_ID__`')
                ->where(array('gl.id'=>$val['list_id'],'order_num='.$orderNum))
                ->field('oi.order_num,oi.id as oid,gl.goods_id,oi.num,oi.univalence')
                ->find();


           $tmp[$k]= $this->table('Goods')->where(array('id'=>$goods[$k]['goods_id']))->find();
            $tmp[$k]['oid']=$goods[$k]['oid'];
            $tmp[$k]['num']=$goods[$k]['num'];
            $tmp[$k]['univalence']=$goods[$k]['univalence'];
            $tmp[$k]['order_num']=$goods[$k]['order_num'];
            unset($goods[$k]);
        }
       return $tmp;
    }
    public function setInfo(){
        $data=$this->data;
        return $this->where(array('order_num'=>$data['order_num']))->save();
    }
}