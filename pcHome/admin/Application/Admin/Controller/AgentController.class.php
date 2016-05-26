<?php

/**
 * Description:我想成为代理商
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Controller;
class AgentController extends \Think\Controller{
    /**
     *储存模型对象
     * @var \Admin\Model\AgentModel
     */
    private  $_model = null;
    protected function _initialize(){
        $meta_titles = array(
            'index' => '我想成为代理商管理',
            'add'  => '增加我想成为代理商',
            'edit' => '修改我想成为代理商',
            'delete' => '删除我想成为代理商'
        );
        $meta_title = $meta_titles[ACTION_NAME];
        $this->assign('meta_title',$meta_title);
        $this->_model = D('Agent');
    }
    /**
     * 显示主页
     */
    public function index(){
        $cond = array();
        $keyword = I('get.keyword');
        if($keyword){
            $cond['name'] = array('like','%'.$keyword.'%');
        }
        $this->assign($this->_model->getPageResult($cond));
        $this->display('index');
    }
   
    /**
     * 增加
     */
    public function  add(){
        if(IS_POST){
            if($this->_model->create()===flase){
                $this->error(get_error($this->_model->getError()));
            }
            if ($this->_model->add()===false){
                $this->error(get_error($this->_model->getError()));
            }else{
                $this->success('增加成功',U('index'));
            }
        }else{
        $this->display();
        }
        
    }
    /**
     * 修改
     * @param integer $id
     */
    public function edit($id){
        if(IS_POST){
//            dump($this->_model->create());
//            exit;
            //收集数据
            if($this->_model->create() ===false){
                $this->error(get_error($this->_model->getError()));
            }
            //修改数据
            if($this->_model->save()===false){
                $this->error(get_error($this->_model->getError()));
            }else{
                $this->success('保存成功',U('index'));
            }
        }else{
            $row = $this->_model->find($id);
            $this->assign('row',$row);
            $this->display('add');
        }
    }
   /**
    * 逻辑删除
    * @param integer $id
    */ 
    public function  delete($id){
        $data = array(
            'status' => 0,
        );
        if($this->_model->where(array('id'=>$id))->setField($data)===false){
            $this->error(get_error($this->_model->getError()));
        }else {
            $this->success('删除成功');
        }
    }
}