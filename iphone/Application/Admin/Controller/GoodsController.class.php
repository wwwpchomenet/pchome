<?php

/**
 * Description:微信端的商品页面
 *
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Controller;

class GoodsController extends \Think\Controller {

    /**
     * 储存模型对象
     * @var \Admin\Model\GoodsModel
     */
    private $_model = null;

    /**
     * 初始化模型
     */
    protected function _initialize() {
        $this->_model = D('GoodsCategory');
    }

    /**
     * 商品一级分类
     */
    public function index() {
        //准备条件1级分类
        $cond = array(
            'parent_id' => 0,
            'status' => 1, 
        );
        $this->assign('rows', $row = $this->_model->getList($cond));
        $this->display('product');
    }

    /**
     * 显示所有商品
     */
    public function showAll(){
        $goodsAll=D('Goods')->getAll();
        $this->assign('goodsAll',$goodsAll);
        $this->display('search');
    }
    public function goodsList(){
        if(IS_GET){
            $id=I('get.id');
            echo json_encode(D('Goods')->getlist($id));
            exit;
        }
    }
/**
 * 商品二级分类
 * @param integer $id  父级id值
 */
    public function second($id){
       $cont = array(
            'parent_id' => $id,
            'status' => 1, 
        );
      // $row = $this->_model->getSecond($cont);
            echo json_encode($results = $this->_model->getSecond($cont));
        exit;
    }
    
    public function  three($id){
         $cont = array(
            'goods_category_id' => $id,
            'status' => 1, 
        );
            echo json_encode($results = $this->_model->getThree($cont));
              exit;
    }
}
