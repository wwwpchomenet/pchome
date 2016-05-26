<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $supplier=D('Supplier');
        $expand=D('Expand');
        $details=$expand->getDetails();
        $pics=$supplier->getPic();
        $this->assign('details',$details);
        $this->assign('pics',$pics);
        $this->display();
    }
}