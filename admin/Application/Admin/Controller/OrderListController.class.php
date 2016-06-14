<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/6/8
 * Time: 10:31
 */

namespace Admin\Controller;


use Think\Controller;

/**
 * 订单信息管理
 * Class OrderListController
 * @package Admin\Controller
 */
class OrderListController extends Controller{
    /**
     * 显示列表
     */
    public function index(){
        //准备搜索条件
        $trade_no= I('get.order_num');
        $cond         = array();
        if ($trade_no) {
            $cond['order_num'] = array('like', '%' . $trade_no . '%');
        }
        $orderInfoList=$this->_getOrderInfo($cond);
        $this->assign('orderInfoList',$orderInfoList);
        $this->display();
    }

    /**
     * 显示订单详情
     * @param $orderNum
     */
    public function details($orderNum){
        $orderInfoModel=D('OrderInfo');
        $row=$orderInfoModel->getGoods($orderNum);
        echo json_encode($row);
    }

    /**
     * 添加订单
     */
    public function add(){
        $this->display();
    }

    /**
     * 删除订单
     */
    public function edit($order_num){
        if(IS_POST){
            $orderModel=D('OrderInfo');
            $orderModel->create();
            if($orderModel->setInfo()!==false){
                $this->success('修改成功',U('index'));
            }
        }else{
            $row=M('OrderInfo')->where(array('order_num'=>$order_num))->find();
            $this->assign('row',$row);
            $this->display('add');
        }
    }

    /**
     * 删除订单
     */
    public function del($id){
        $orderInfoModel=D('OrderInfo');
        $orderInfoModel->where(array('order_num'=>$id))->delete();
        $this->success('删除成功',U('index'));
    }

    /**
     * 获取订单列表信息
     * @return 订单列表
     */
    private function _getOrderInfo($cond){
        $orderInfoModel=D('OrderInfo');
        $orderList=$orderInfoModel->getOrder($cond);
        return $orderList;
    }

    /**
     * 修改发货时间
     */
    public function getDate(){
        $orderInfoModel=M('OrderInfo');
        if(I('post.status')==1){
            $orderInfoModel->where(array('order_num'=>I('post.order_num')))->save(array('delivery'=>time()));
        }
        if(I('post.status')==2){
            $orderInfoModel->where(array('order_num'=>I('post.order_num')))->save(array('shipments'=>time()));
        }
    }

    /**
     * 修改订单商品信息
     */
    public function setData(){
        $orderInfoModel=M('OrderInfo');
        $num=   I('post.num');
        $univalence=I('post.univalence');
        $id=I('post.id');
        $arr=array();
        for($i=0;$i<count($num);$i++){
            $orderInfoModel->where('id='.$id[$i])->save(array('num'=>$num[$i],'univalence'=>$univalence[$i]));
        }
    }
}