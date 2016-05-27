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
        if(session('MEMBER_INFO')!='') {
            $goodsList = $this->userGoodsList();
            $this->assign('goodsList', $goodsList);
            $this->display('settlement');
        }else{
            $this->success(U('index.php/Admin/member/login'));
        }
    }

    /**
     * 获取用户的清单列表
     * @return mixed
     */
    public function userGoodsList(){
        $goodslistModel=D('GoodsList');
        //dump($goodslistModel->getGoodsList(session('user')['id']));echo $goodslistModel->getLastSql();exit;
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
}