<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/19
 * Time: 16:46
 */

namespace Admin\Controller;


use Think\Controller;

class BannerController extends Controller{
    /**
     * 存储模型对象.
     * @var \Admin\Model\GoodsModel
     */
    private $_model = null;

    /**
     * 设置标题和初始化模型.
     */
    protected function _initialize() {
        $meta_titles  = array(
            'index'  => '轮播图管理',
            'add'    => '添加轮播图',
            'edit'   => '修改轮播图',
            'delete' => '删除轮播图',
        );
        $meta_title   = $meta_titles[ACTION_NAME];
        $this->assign('meta_title', $meta_title);
        $this->_model = D('Banner');
    }

    /**
     * 轮播图列表 显示
     */
    public function index(){
        $this->display();
    }

    /**
     * 添加轮播图
     */
    public function add(){
        if(IS_POST){
            if($this->_model->addBanner()){
                $this->success('添加图片成功',U());
            }else{
                $this->success('添加图片失败',U());
            }
        }
        $this->display();
    }
}