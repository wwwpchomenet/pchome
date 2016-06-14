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
        $member = session('MEMBER_INFO')['id'];//获取会员的id值
        if(empty($member)){
            $this->redirect('index.php/Admin/Member/login');
        }else{
       $rows = $this->_model->getinfo($member);
       $this->assign('rows',$rows);
       $this->display('AllOrders');
        }
     
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
        $this->assign('rows',$rows);
        $this->display('OrderStatus');
    }
    
    /**
     * 确认收获
     * 1/会员id,和订单编号作为修改字段的条件
     * 2.时间戳入库
     */
    public function  notarize(){
        $data = I('post.');
        //时间戳
        $fin = $data['finish'];
        //截取时间戳
        $finish = substr($fin, 0,10);
        //会员id
        $member_id = $data['member_id'];
        //订单编号
        $order_num = $data['order_num'];
        $tamp = array(
            'status'=>4,
            'finish'=>$finish
        );
        $tiaojian = array(
            'member_id' => $member_id,
            'order_num'=> $order_num
        );
        
        if($this->_model->field('status,finish')->where($tiaojian)->save($tamp)===false){
           
            $this->error(get_error($this->_model->getError()));
        }else{
             
           $this->ajaxReturn('收货成功');
        }
    }
}
