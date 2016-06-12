<?php

/**
 * Description:订单列表
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Model;
class OrderInfoModel extends \Think\Model{
    /**
     * 获取所有的数据
     */
   public function getinfo(){
       $member = session('MEMBER_INFO')['id'];//获取会员的id值
       //按照订单编号分组查询
       $rows = $this->where(array('member_id'=>$member))->group('order_num')->select();
       //用数组保存数据
       $list = array();
       foreach ($rows as  $k=>$row) {
           $k = $row['list_id'];//关联表的字段
           //求此订单的商品的总个数
           $cond[]=$this->where(array('order_num'=>$row['order_num']))->count();
           //求商品的logo
           $logo[] =M('Goods')->where(array('id'=> M('GoodsList')->where(array('id'=>$k))->getField('goods_id')))->getField('logo');
           //求商品的名字
           $list[] =M('Goods')->where(array('id'=> M('GoodsList')->where(array('id'=>$k))->getField('goods_id')))->getField('name');     
       }
       //把数据全部整合到二维数组中
       foreach ($rows as $k=>$v){
           $rows[$k]['logo'] = $logo[$k];
           $rows[$k]['count'] = $cond[$k];
           $rows[$k]['good_name'] =  $list[$k];
       }
       return $rows;
   }
   
   public function showinfo($order_num){
      $rows =  $this->where(array('order_num'=>$order_num))->select();
        $list = array();
       foreach ($rows as  $k=>$row) {
           $k = $row['list_id'];//关联表的字段
           //求此订单的商品的总个数
           $cond[]=$this->where(array('order_num'=>$row['order_num']))->count();
           //求商品的logo
           $logo[] =M('Goods')->where(array('id'=> M('GoodsList')->where(array('id'=>$k))->getField('goods_id')))->getField('logo');
           //求商品的名字
           $list[] =M('Goods')->where(array('id'=> M('GoodsList')->where(array('id'=>$k))->getField('goods_id')))->getField('name');   
            //求商品的多少起售
           $norms[] =M('Goods')->where(array('id'=> M('GoodsList')->where(array('id'=>$k))->getField('goods_id')))->getField('norms'); 
       }
       //把数据全部整合到二维数组中
       foreach ($rows as $k=>$v){
           $rows[$k]['logo'] = $logo[$k];
           $rows[$k]['count'] = $cond[$k];
           $rows[$k]['good_name'] =  $list[$k];
           $rows[$k]['norms'] =  $norms[$k];
       }
       return $rows;
   }
   
}
