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
        $orderInfoModel->where(array('order_num'=>$id))->setField('del','0');
        $this->success('删除成功',U('index'));
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
    /**
     * 显示列表
     */
    public function indexShow($del,$show){
        //准备搜索条件
        $trade_no= I('get.order_num');
        $cond         = array();
        if ($trade_no) {
            $cond['order_num'] = array('like', '%' . $trade_no . '%');

        }
        $cond['del']=$del;
        $orderInfoModel=D('OrderInfo');
        $orderInfoList=$orderInfoModel->getOrder($cond,$del);
        $this->assign('orderInfoList',$orderInfoList);
        $this->display($show);
    }

    /**
     * 回收站管理
     */
    public function recycling(){
        if(I('get.id')){
            $orderInfoModel=D('OrderInfo');
            $orderInfoModel->where(array('order_num'=>I('get.id')))->setField('del','1');
            $this->indexShow('0', 'recycling');
        }else {
            $this->indexShow('0', 'recycling');
        }
    }

    /**
     * 订单显示
     */
    public function index(){
        $this->indexShow('1','index');
    }
}