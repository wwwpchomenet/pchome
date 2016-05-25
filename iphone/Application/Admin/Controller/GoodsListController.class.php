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
        $goodsList=$this->userGoodsList();
        $this->assign('goodsList',$goodsList);
        $this->display('settlement');
    }

    /**
     * 获取用户的清单列表
     * @return mixed
     */
    public function userGoodsList(){
        $goodslistModel=D('GoodsList');
        //dump($goodslistModel->getGoodsList(session('user')['id']));echo $goodslistModel->getLastSql();exit;
       return $goodslistModel->getGoodsList(session('user')['id']);
    }
    public function delete(){
        if(IS_GET){
            $goodslistModel=D('GoodsList');
            dump($goodslistModel->goodsListDelete());
           return $goodslistModel->goodsListDelete();
        }
    }

    /**
     * 商品清单入库
     */
    public function add(){
        if(IS_POST){
            $data=I('post.');
            $goodslistModel=D('GoodsList');
            if($goodslistModel->setGoodsList()) {
                echo 1;
            }
        }
    }
}