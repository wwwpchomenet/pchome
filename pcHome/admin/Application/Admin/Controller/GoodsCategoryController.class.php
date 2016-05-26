<?php

/**
 * Description:商品分类
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Controller;

class GoodsCategoryController extends \Think\Controller {

    /**
     * 存储模型对象.
     * @var \Admin\Model\GoodsCategoryModel 
     */
    private $_model = null;

    /**
     * 设置标题和初始化模型.
     */
    protected function _initialize() {
        $meta_titles  = array(
            'index'  => '商品分类管理',
            'add'    => '添加商品分类',
            'edit'   => '修改商品分类',
            'delete' => '删除商品分类',
        );
        $meta_title   = $meta_titles[ACTION_NAME];
        $this->assign('meta_title', $meta_title);
        $this->_model = D('GoodsCategory');
    }

    /**
     * 列表页面
     */
    public function index() {
        $rows = $this->_model->getList();
        $this->assign('rows', $rows);
        $this->display();
    }

    /**
     * 添加分类,并且会自动计算层级和左右节点.
     */
    public function add() {
        if (IS_POST) {
            //收集数据
            if ($this->_model->create() === false) {
                $this->error(get_error($this->_model->getError()));
            }

            //添加节点
            //提示条状
            if($this->_model->addCategory()===false){
                $this->error(get_error($this->_model->getError()));
            }
            $this->success('添加成功',U('index'));
        } else {
            $this->_before_view();
            $this->display();
        }
    }

    /**
     * 修改分类,并且会重新计算节点和层级.
     * @param integer $id
     */
    public function edit($id) {
        if(IS_POST){
            //收集数据
            if ($this->_model->create() === false) {
                $this->error(get_error($this->_model->getError()));
            }

            //添加节点
            //提示条状
            if($this->_model->updateCategory()===false){
                $this->error(get_error($this->_model->getError()));
            }
            $this->success('修改成功',U('index'));
        }else{
            $row = $this->_model->find($id);
            $this->assign('row', $row);
            $this->_before_view();
            $this->display('add');
        }
    }

    /**
     * 删除分类.
     * 并且使用逻辑删除,将后代分类一并删除.
     * @param type $id
     */
    public function delete($id) {
        if($this->_model->deleteCategory($id)===false){
             $this->error(get_error($this->_model->getError()));
        }
        $this->success('修改成功',U('index'));
    }

    /**
     * 准备分类列表用于选择父级分类,ztree插件使用的是json对象,所以传递的是json字符串.
     */
    private function _before_view(){
        $categories = $this->_model->getList('id,name,parent_id');
        array_unshift($categories,array('id'=>0,'name'=>'顶级分类','parent_id'=>0));
        $this->assign('categories', json_encode($categories));
    }
}
