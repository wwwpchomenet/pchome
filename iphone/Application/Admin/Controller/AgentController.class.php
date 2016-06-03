<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/20
 * Time: 9:50
 */

namespace Admin\Controller;


use Think\Controller;

class AgentController extends Controller{
    public function add(){
        if(IS_POST){
            $supplier=D('Agent');
           if(!$supplier->create()||!$supplier->message()){
                $this->error(get_error($supplier->getError()));
            } else {
                $this->redirect('index.php/Admin/index/index');
            }
        }
    }
}