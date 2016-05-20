<?php

/**
 * Description:分公司扩展
 *
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Controller;

class ExpandController extends \Think\Controller {

    private $_model = null;

    protected function _initialize() {
        $meta_titles = array(
            'index' => '分公司扩展管理',
            'add' => '增加分公司扩展',
            'edit' => '修改分公司扩展',
            'delete' => '删除分公司扩展',
        );
        $meta_title = $meta_titles[ACTION_NAME];
        $this->assign('meta_title', $meta_title);
        $this->_model = D('Expand');
    }
       public function  index(){
          $cond = array();
        //模糊查询名字
        $keyword = I('get.keyword');
        if($keyword){
            $cond['name'] = array('like','%'.$keyword.'%');
        }
        $this->assign($this->_model->getPageResult($cond));
        $this->display('index');
       }
       /**
     * 添加分公司扩展分类.
     * 使用了自动验证.
     */
    public function add() {
        if (IS_POST) {
            // 收集数据.
            if ($this->_model->create() === false) {
                $this->error(get_error($this->_model->getError()));
            }
            // 保存数据.
            if ($this->_model->add() === false) {
                $this->error(get_error($this->_model->getError()));
            } else {
                $this->success('添加成功', U('index'));
            }
        } else {
            $this->display();
        }
    }

    /**
     * 修改文章分类.
     * @param integer $id 文章分类唯一标识.
     */
    public function edit($id) {
        if (IS_POST) {
            // 收集数据.
            if ($this->_model->create() === false) {
                $this->error(get_error($this->_model->getError()));
            }
            // 保存数据.
            if ($this->_model->save() === false) {
                $this->error(get_error($this->_model->getError()));
            } else {
                $this->success('修改成功', U('index'));
            }
        } else {
            //取出数据表中的内容回显
            $row = $this->_model->find($id);
            $this->assign('row', $row);
            $this->display('add');
        }
    }

    /**
     * 使用逻辑删除一个文章分类.
     * @param integer $id 文章分类id.
     */
    public function delete($id) {
        
        $data = array(
            'status'=>0,
        );
        //删除的文章分类名字后添加_del后缀标识
        if($this->_model->where(array('id'=>$id))->setField($data)===false){
            $this->error(get_error($this->_model->getError()));
        }else{
            $this->success('删除成功');
        }
    }

}

