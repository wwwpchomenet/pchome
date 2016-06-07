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
            $goodsList = $this->_userGoodsList();
        if($goodsList){
            $this->assign('goodsList', $goodsList);
            $this->display('order');
        }else{
            $this->display('order_kong');
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
    
    public function setStatus(){
        if(IS_POST){
            $data=I('post.');
            $listid = $data['id'];
           //---------------修改订单列表的状态值--------------------
            foreach ($listid as $value){
               if(M('GoodsList')->where(array('id'=>$value))->setField('status',1)===false){
                   $this->ajaxReturn("提交失败");
               } 
            }   
            //------------新增列表所有状态-----------------
            $member = session('MEMBER_INFO')['id'];
            $arr = array();
            foreach ($listid as $k=>$v){
                $arr[$k]['list_id'] = $v;
                $arr[$k]['member_id'] =$member;
                $arr[$k]['name'] = $data['name'];
                $arr[$k]['tel'] = $data['tel'];
                $arr[$k]['title_name'] = $data['title_name'];
                $arr[$k]['duty'] = $data['duty'];
            }

          
            if(M('OrderInfo')->addAll($arr)===false){
               $this->error(get_error(M('OrderInfo')->getError()));
            }else{
               $this->redirect($url);
            }
        }else{
            
        }
    }
    
     public function setlist(){
          $this->display('OrderDetails');
    }
}