<?php

/**
 * Description:代理商
 *
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Controller;

class MemberController extends \Think\Controller {

    protected $_model = null;

    /**
     * 初始化方法
     */
    protected function _initialize() {
        $meta_titles = array(
            'index' => '代理商管理',
            'add' => '代理商增加',
            'edit' => '代理商修改',
            'remove' => '代理商删除',
        );
        //分配视图
        $this->assign('meta_titles', $meta_titles[ACTION_NAME]);
        //新建模型
        $this->_model = D('Member');
    }

    /**
     * 主页面显示
     */
    public function index() {
        //获取查询框数据
        $search = I('get.search');
        //定义数组
        $conditions = array();
        //判断查询框是否有值,采用模糊查询
        if ($search) {
            $conditions['name'] = array('like', "%$search%");
        }
        //调用模型showPage方法
        $rows = $this->_model->showPage($conditions);
        //分发数据
        $this->assign($rows);
        //加载视图
        $this->display();
    }

    /**
     * 增加代理商
     */
    public function add() {
        if (IS_POST) {
            //收集数据
            if ($rows = $this->_model->create() === false) {
                $this->error($this->_model->getError());
            }
            //去掉最后多余的数据
            array_pop($rows);
            //保存数据
            if ($this->_model->add() === false) {
                $this->error($this->_model->getError());
            } else {
                $this->success('添加成功！', U('index'));
            }
        } else {
            //获取父级id
            $provinces = $this->_model->getListByParentId();
            //分配数据
            $this->assign('provinces', $provinces);
            //加载视图
            $this->display();
        }
    }

    /**
     * 代理商删除
     */
    public function edit() {
        $id = I('get.id');
        if (IS_POST) {
             if($this->_model->create()){
                if($this->_model->save()===false){
                    $this->error($this->_model->getError());
                }else{
                    $this->success('修改成功！',U('index'));
                }
            }else{
                $this->error($this->_model->getError());
            }
        } else {
            $provinces = $this->_model->getListByParentId();
            $this->assign('provinces', $provinces);
            $row = $this->_model->getList($id);
            $this->assign('row', $row);
            $this->display('add');
        }
    }
    
    /**
     * 删除代理商,采用逻辑删除
     */
    public function  remove(){
        //获取id值
        $id = I('get.id');
        //修改条件
        $data = array(
            'is_del'=>0,
        );
        //修改字段
        if($this->_model->where(array('id'=>$id))->setField($data)){
                 $this->success('删除成功！');
        }else{
               $this->error($this->_model->getError());
        }
        }
    /**
     * 通过父级地址获取地址列表
     * @param integer $parent_id  父级id
     */
    public function getListByParentId($parent_id) {
        echo json_encode($this->_model->getListByParentId($parent_id));
        exit;
    }
}
