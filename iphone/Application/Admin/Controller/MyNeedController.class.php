<?php

/**
 * Description:微信端需求
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Controller;
class MyNeedController extends \Think\Controller{
    
    /**
     *
     * @var \Admin\Model\MyneedModel
     */
    private  $_model = null;
    /**
     * 设置标题和初始化模型
     */
    protected function _initialize(){
         $this->_model = D('MyNeed');
    }

    public function  index(){
        if(IS_POST){
            dump($this->_model->create());
        }else{ 
        $this->display('Singledemand');
        }
    }
}
