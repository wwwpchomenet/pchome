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
         //获取搜索关键字的功能
        $cond = array();
        //模糊查询品牌的名字
        $keyword = I('get.keyword');
        if($keyword){
            $cond['member'] = array('like','%'.$keyword.'%');
        }
        $this->assign($this->_model->getPageResult($cond));
        $this->display();
      
    }
    
    public function  add(){
        if(IS_POST){
           if($this->_model->create()===false){
               $this->error(get_error($this->_model->getError()));
           }
           if($this->_model->add()===false){
                 $this->error(get_error($this->_model->getError()));
           }else{
               $this->success('增加用户需求成功',U('index.php/Admin/MyNeed/index'));
           }
        }else{ 
          $this->display();
        }
       
    }
    public function  edit($id){
        if(IS_POST){
            if ($this->_model->create() === false) {
                $this->error(get_error($this->_model->getError()));
            }
            // 保存数据.
            if ($this->_model->where(array('id'=>$id))->save() === false) {
                echo "skdsakjd";
                $this->error(get_error($this->_model->getError()));
            } else {
                 $this->success('修改成功',U('index.php/Admin/MyNeed/index'));
            } 
        }else{
                $this->assign('row',$this->_model->where(array('id'=>$id))->find());
                $this->display('add');   
        }
    }
    public function  delete($id){
        $data = array(
            'status'=>-1
        );
        //删除的品牌名字后添加_del后缀标识
        if($this->_model->where(array('id'=>$id))->setField($data)===false){
            $this->error(get_error($this->_model->getError()));
        }else{
            $this->success('删除成功');
        }
    }

}
