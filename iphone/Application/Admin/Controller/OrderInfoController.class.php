<?php
/**
 * Created by PhpStorm.
 * User: 刘富祥
 * Date: 2016/5/25
 * Time: 17:36
 */

namespace Admin\Controller;


use Think\Controller;

class OrderInfoController extends Controller{
    /**
     * 显示收货地址
     */
    public function  index(){
        $orderModel=D('OrderInfo');
        $address=$orderModel->where('member_id='.session('MEMBER_INFO')['id'])->select();
        $this->assign('address',$address);
        $this->display('address');
    }

    /**
     * 添加收货地址
     */
    public function  add(){
        $this->display('NewAddress');
    }

    /**
     * 修改 默认收货地址
     * @param $isDefault 当前用户点击的收获地址id
     */
    public function isDefault($isDefault){
        $orderModel=D('OrderInfo');
        $orderModel->where('member_id = '.session('MEMBER_INFO')['id'])->setField('is_default',0);
        $orderModel->where('id = '.$isDefault)->setField('is_default',1);
        $this->success('修改成功',U('index.php/admin/OrderInfo/index'));
    }
}