<?php

/**
 * Description:微信首页
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Controller;
class BannerController extends \Think\Controller{
    /**
     *存储模型对象
     * @var \Home\Model\AddressModel
     */
    private $_model = null;
    /**
     * 初始化
     */
    protected function  _initialize(){
        $this->_model = D('Banner');
    }
   
    public function  index(){
       //读取数据
        $rows = $this->_model->select();
        $this->assign('rows',$rows);
        $this->display('index');
   }
}
