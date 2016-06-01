<?php

/**
 * Description:后台,我的需求
 *
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Controller;

class MyNeedController extends \Think\Controller {

    /**
     * 存储模型对象
     * @var \Admin\Model\MyNeedModel
     */
    private $_model = null;

    protected function _initialize() {
        $meta_titles = array(
            'index' => '客户需求管理',
            'add' => '添加客户需求',
            'edit' => '修改客户需求',
            'delete' => '删除客户需求',
        );
        $meta_title = $meta_titles[ACTION_NAME];
        $this->assign('meta_title', $meta_title);
        $this->_model = D('MyNeed');
    }
    public function index() {
        $this->display();
    }
    
    public function  add(){
        
    }
    public function  save(){
        
    }
    public function  remove(){
        
    }
}
