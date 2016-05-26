<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $rows['details']=$this->_expandShow();
        $rows['pics']=$this->_supplierShow();
        $rows['goodscategory']=$this->_goodsCateGory();
        $this->assign('rows',$rows);
        $this->display();
    }
    public function goodsCateGoryShow(){
        if(IS_GET){
            $id=I('get.id');
            $goods=D('Goods');
            $goodsCategory=$goods->getGoods($id);
            echo  json_encode($goodsCategory);
        }
    }
    private function  _supplierShow(){
        $supplier=D('Supplier');
        $pics=$supplier->getPic();
        return $pics;
    }
    private function  _expandShow(){
        $expand=D('Expand');
        $details=$expand->getDetails();
        $this->assign('details',$details);
        return $details;
    }
    private  function  _goodsCateGory($goodsId){
        $goodsModel=D('GoodsCategory');
        $goods=$goodsModel->getGoods($goodsId);
        return $goods;
    }
}