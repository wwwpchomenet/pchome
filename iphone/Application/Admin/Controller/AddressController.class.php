<?php
/**
 * Created by PhpStorm.
 * User: 刘富祥
 * Date: 2016/5/25
 * Time: 17:36
 */

namespace Admin\Controller;


use Think\Controller;

class AddressController extends Controller{
    /**
     * 显示收货地址
     */
    public function  index(){
        $orderModel=D('Address');
        if(empty(session('MEMBER_INFO')['id'])){
             $this->redirect('index.php/Admin/Member/login');
        }else{
             $address=$orderModel->where('member_id='.session('MEMBER_INFO')['id'])->select();
        $this->assign('address',$address);
        $this->display('address');
        }
       
    }

    /**
     * 添加收货地址
     */
    public function  add(){
        if(IS_POST){
            $orderModel=D('Address');
//            dump($orderModel->create());
            if($orderModel->create()===false){
               $this->error(get_error($orderModel->getError()));
            }
            if($orderModel->add()===false){
                $this->error(get_error($orderModel->getError()));
            }
            $this->redirect('index.php/Admin/Address/index');
        }else{
            $this->display('NewAddress');
        }
    }

    /**
     * 修改 默认收货地址
     * @param $isDefault 当前用户点击的收获地址id
     */
    public function isDefault($isDefault){
        $orderModel=D('Address');
        $orderModel->where('member_id = '.session('MEMBER_INFO')['id'])->setField('is_default',0);
        $orderModel->where('id = '.$isDefault)->setField('is_default',1);
        $this->success('修改成功',U('index.php/admin/Address/index'));
    }

    /**
     * 修改收货地址
     */
    public function edit(){
        if(IS_POST){
            $orderModel=D('Address');
            if($orderModel->where(array('id'=>I('post.id')))->save(I('post.'))===false){
                $this->error(get_error($orderModel->getError()));
            }
            $this->success('添加成功',U('index.php/Admin/Address/index'));
        }else{
            $AddressEdit=$this->_getAddressDefault();
            $this->assign('AddressEdit',$AddressEdit);
            $this->display('NewAddress');
        }
    }

    /**
     * 删除指定收货地址信息
     * @param $id 当前收货地址的ID
     */
    public function delete($id){
        D('Address')->where(array('id'=>$id))->delete();
        $this->success('',U('index.php/Admin/Address/index'));
    }

    /**
     * 获取默认收货地址信息
     * @return 返回默认收货地址信息
     */
    private function _getAddressDefault(){
        return  D('Address')->where(array('id'=>I('get.id')))->find();
    }
}