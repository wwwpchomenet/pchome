<?php
/**
 * Created by PhpStorm.
 * User: 刘富祥
 * Date: 2016/5/25
 * Time: 10:27
 */

namespace Admin\Controller;


use Think\Controller;

/**
 * 商品清单
 * Class GoodsListController
 * @package Admin\Controller
 */
class GoodsListController extends Controller{
    /**
     * 显示所有商品清单
     */
    public function getList(){
        if(session('MEMBER_INFO')['status']==1){
                $goodsList = $this->_userGoodsList();
            if($goodsList){
                $this->assign('goodsList', $goodsList);
                $this->display('order');
            }else{
                $this->display('order_kong');
            }
        }else{
            $this->redirect('index.php/Admin/PersonalCenter/index');
        }
    }

    /**
     * 显示清单列表
     */
    public function getListing(){

            $AddressDefault=$this->_getAddressDefault();
            $goodsList = $this->_userGoodsList();
            $this->assign('AddressDefault',$AddressDefault);
            $this->assign('goodsList', $goodsList);
            $this->display('settlement');

    }

    /**
     * 获取用户的清单列表
     * @return mixed
     */
    private function _userGoodsList(){
        $goodslistModel=D('GoodsList');
       return $goodslistModel->getGoodsList(session('MEMBER_INFO')['id']);
    }
    private function _getAddressDefault(){
        return  D('Address')->where(array('is_default'=>1,'member_id'=>session('MEMBER_INFO')['id']))->find();
    }
    /**
     * 点击删除清单
     * @return mixed
     */
    public function delete(){
        if(IS_GET){
            $goodslistModel=D('GoodsList');
           return $goodslistModel->goodsListDelete();
        }
    }

    /**
     * 商品清单入库
     */
    public function add(){
        $data=I('post.');
            if(D('GoodsList')->setGoodsList($data)) {
                echo 1;
            }
    }

    /**
     * 修改订单列表的数量
     */
    public function save(){
        $goodslistModel=D('GoodsList');
        $data['num'] =I('post.num');
       $goodslistModel->where(array('id'=>I('post.goods_id')))->save($data);
    }
    
    /**
     *增加订单 
     */
    public function setStatus(){
        if(IS_POST){
            $data=I('post.');
            $listid = $data['id'];
           //---------------修改订单列表的状态值--------------------
            foreach ($listid as $value){
               if(M('GoodsList')->where(array('id'=>$value[0]))->setField('status',1)===false){
                   $this->ajaxReturn("提交失败");
               } 
            }
            
            //------------新增列表所有状态-----------------
            $member = session('MEMBER_INFO')['id'];
            //订单编号
            $order_num=D('GoodsList')->_calc_sn();
            $arr = array();
            foreach ($listid as $k=>$v){
                $arr[$k]['list_id'] = $v[0];//商品列表id
                $arr[$k]['univalence']=$v[1];//商品单价
                $arr[$k]['num']=$v[2];//商品数量
                $arr[$k]['price']=$v[3];//商品价格
                $arr[$k]['delivery_name']='由供应链提供配送服务';//物流方式
                $arr[$k]['order_num']=$order_num;//订单编号
                $arr[$k]['member_id'] =$member;//会员id
                $arr[$k]['name'] = $data['name'];//收货人姓名
                $arr[$k]['tel'] = $data['tel'];//收获人电话
                $arr[$k]['detail_address'] = $data['detail_address'];//收获人地址
                $arr[$k]['title_name'] = $data['title_name'];//发票姓名
                $arr[$k]['duty'] = $data['duty'];//税号
                $arr[$k]['countmeny'] = $data['countmeny'];//此订单总金额
            }
            if(M('OrderInfo')->addAll($arr)===false){
                 $this->ajaxReturn("订单失败");
            }
        }
    }
  
}