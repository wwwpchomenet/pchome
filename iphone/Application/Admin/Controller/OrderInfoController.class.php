<?php

/**
 * Description:订单列表
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Controller;
class OrderInfoController extends \Think\Controller{
    
    private  $_model = null;
   protected function _initialize() {
        $this->_model = D('OrderInfo');
    }

    public function setlist(){
         /**
          * 准备数据
          * 1.第一个商品的图片
          * 2.第一个商品名字
          * 3.一个订单的商品数
          * 4.订单状态
          * 5.总价格
          */
      $rows = $this->_model->getinfo();
       $this->assign('rows',$rows);
       $this->display('AllOrders');
    }
    
  /**
   * 订单状态详情列表(商品页)
   */
    public function  showList(){
        $order_num = session('ORDER_NUM');

        //查询所有的订单相同的编号
        $rows =$this->_model->showinfo($order_num);
        $this->assign('rows',$rows);
        $this->display('OrderDetails');
    }
    /**
     * 订单状态物流列表(商品页)
     */
    public function showTwo($order_num){
        session('ORDER_NUM',$order_num);
        $rows = $this->_model->where(array('order_num'=>$order_num))->limit(1)->select();
//        dump($rows);
//        exit;
        $this->assign('rows',$rows);
        $this->display('OrderStatus');
    }
  public function showTwo2(){
       $order_num = session('ORDER_NUM');
        $rows = $this->_model->where(array('order_num'=>$order_num))->limit(1)->select();
//        dump($rows);
//        exit;
        $this->assign('rows',$rows);
        $this->display('OrderStatus');
    }
    
    
    
}
