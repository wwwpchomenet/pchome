<?php

/**
 * Description:商品
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Controller;
class GoodsController extends \Think\Controller {

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
            'index'  => '商品管理',
            'add'    => '添加商品',
            'edit'   => '修改商品',
            'delete' => '删除商品',
        );
        $meta_title   = $meta_titles[ACTION_NAME];
        $this->assign('meta_title', $meta_title);
        $this->_model = D('Goods');
    }

    /**
     * 展示商品列表.
     */
    public function index() {
        //准备搜索条件
        $keyword      = I('get.keyword');
        $category     = I('get.cat_id');
        $is_on_sale   = I('get.is_on_sale');
        $website     = I('get.website');
        $cond         = array();
        if ($keyword) {
            $cond['name'] = array('like', '%' . $keyword . '%');
        }
        if ($category) {
            $cond['goods_category_id'] = $category;
        }
        if (strlen($is_on_sale)) {
            $cond['is_on_sale'] = $is_on_sale;
        }
        if (strlen($website)) {
            $cond['website'] = $website;
        }

        //准备数据
        $rows       = $this->_model->getPageResult($cond);
        $this->assign($rows);
//        //准备供货商关联数组,使用id作为键名
//        $suppliers  = M('Supplier')->where(array('status' => 1))->getField('id,name');
//        //准备品牌关联数组,使用id作为键名
//        $brands     = M('Brand')->where(array('status' => 1))->getField('id,name');
//        //准备分类关联数组,使用id作为键名
  $categories = M('GoodsCategory')->where(array('status' => 1))->getField('id,name');
//        $this->assign('suppliers', $suppliers);
//        $this->assign('brands', $brands);
   $this->assign('categories', $categories);

        //商品的状态
        $this->assign('is_on_sales', $this->_model->is_on_sales);
        $this->assign('website', $this->_model->website);
        $this->assign('goods_statuses', $this->_model->goods_statuses);
        //商品的上架状态
        $this->display();
    }

    /**
     * 添加商品
     */
    public function add() {
        if (IS_POST) {
            $row = $this->_model->create();
//            dump($row);
//            exit;
            if ($this->_model->create() === false) {
               $this->error($this->_model->getError());
            }
            if ($this->_model->addGoods() === false) {
                $this->error(get_error($this->_model->getError()));
            } else {
                $this->success('添加商品成功', U('index'));
            }
        } else {
            //1.获取商品分类json数据
            //2.传递到表单
            $this->_before_view();
            $this->display();
        }
    }

    /**
     * 编辑商品
     * @param type $id
     */
    public function edit($id) {
        if (IS_POST) {
            //1.收集数据
            if ($this->_model->create() === false) {
                $this->error(get_error($this->_model->getError()));
            }
            //2.执行修改
            if ($this->_model->updateGoods() === false) {
                $this->error(get_error($this->_model->getError()));
            } else {
                $this->success('修改商品成功', U('index'));
            }
        } else {
            //获取商品信息,如果没有找到,就跳转到列表页
            if (!$row = $this->_model->getGoodsInfo($id)) {
                $this->error('请检查商品id', U('index'));
            }
            $this->_before_view();
            $this->assign('row', $row);
            $this->display('add');
        }
    }

    /**
     * 准备分类列表用于选择父级分类,ztree插件使用的是json对象,所以传递的是json字符串.
     */
    private function _before_view() {
        //商品分类
        $categories = D('GoodsCategory')->getList('id,name,parent_id');
        $this->assign('categories', json_encode($categories));
        
        //获取所有的会员等级
        $member_levels = M('MemberLevel')->where(['status'=>1])->select();
        $this->assign('member_levels', $member_levels);
    }

    /**
     * 删除商品,逻辑删除.
     * @param integer $id 商品id.
     */
    public function delete($id) {
        if ($this->_model->setField(['id' => $id, 'status' => 0]) === false) {
            $this->error(get_error($this->_model->getError()));
        } else {
            $this->success('删除成功');
        }
    }
}
