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
        $goodsList = $this->_userGoodsList();
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

    /**
     * 点击X时删除清单
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
        if(shuffle($data)===true){
            if(M('GoodsList')->addAll($data)) {
                echo 1;
            }
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
}