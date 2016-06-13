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
        $trade_no= I('get.num');
        $name     = I('get.name');
        $cond         = array();
        if ($trade_no) {
            $cond['trade_no'] = array('like', '%' . $trade_no . '%');
        }
        if ($name) {
            $cond['name'] = array('like', '%' . $name . '%');
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
        echo 2;exit;
        $this->display();
    }

    /**
     * 删除订单
     */
    public function edit(){
        $this->display('add');
    }

    /**
     * 删除订单
     */
    public function del($id){
        $orderInfoModel=D('OrderInfo');
        $orderInfoModel->where(array('id'=>$id))->delete();
        $this->success('删除成功',U('index'));
    }

    /**
     * 获取商品信心
     */
    private function _getGoods(){

    }

    /**
     * 获取购物车列表
     */
    private function _getGoodsList(){

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
}