<?php

/**
 *Description:管理员
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Controller;

class AdminController extends \Think\Controller{
    /**
     * 存储模型对象.
     * @var \Admin\Model\AdminModel 
     */
    private $_model = null;

    /**
     * 设置标题和初始化模型.
     */
    protected function _initialize() {
        $meta_titles  = array(
            'index'  => '管理员管理',
            'add'    => '添加管理员',
            'edit'   => '修改管理员',
            'delete' => '删除管理员',
            'resetPwd' => '重置密码',
            'tips' => '提醒',
        );
        $meta_title   = $meta_titles[ACTION_NAME];
        $this->assign('meta_title', $meta_title);
        $this->_model = D('Admin');
    }
    
    /**
     * 管理员列表.
     */
    public function index(){
        $this->assign('rows',$this->_model->getList());
        $this->display();
    }
    
    /**
     * 添加管理员.
     */
    public function add(){
        if(IS_POST){
            if($this->_model->create() === false){
                $this->error(get_error($this->_model->getError()));
            }
            if($this->_model->addAdmin() === false){
                $this->error(get_error($this->_model->getError()));
            }
            $this->success('添加成功',U('index'));
        }else{
            $this->_before_view();
            $this->display();
        }
    }
    
    /**
     * 修改管理员
     * @param integer $id
     */
    public function edit($id){
        if(IS_POST){
            if($this->_model->create() === false){
                $this->error(get_error($this->_model->getError()));
            }
            if($this->_model->updateAdmin() === false){
                $this->error(get_error($this->_model->getError()));
            }
            $this->success('修改成功',U('index'));
        }else{
            //获取管理员数据,包括基本信息 角色 权限
            $this->assign('row', $this->_model->getAdminInfo($id));
            $this->_before_view();
            $this->display('add');
        }
    }
    
    /**
     * 删除用户
     * @param integer $id
     */
    public function delete($id) {
        if($this->_model->deleteAdmin($id) === false){
            $this->error(get_error($this->_model->getError()));
        }
        $this->success('删除成功',U('index'));
    }
    
    /**
     * 重置密码
     * @param type $id
     */
    public function resetPwd($id) {
        if(IS_POST){
            //收集数据
            if($this->_model->create('','reset_pwd') === false){
                $this->error(get_error($this->_model->getError()));
            }
            //执行修改
            if(($password = $this->_model->resetPwd()) === false){
                $this->error(get_error($this->_model->getError()));
            }
            session('tips',$password);
            
            //跳转
            $this->success('重置成功',U('tips'));
        }else{
            //获取管理员基本信息,以便确认没有改错
            $row = $this->_model->field('id,username,email')->find($id);
            if(empty($row)){
                $this->error('查无此用户');
            }
            $this->assign('row', $row);
            $this->display('resetPwd');
        }
    }
    
    /**
     * 展示提示信息.
     */
    public function tips(){
        $password = session('tips');
        session('tips',null);
        $this->assign('tips', $password);
        $this->display();
    }
    
    /**
     * 后台管理员登陆.
     */
    public function login(){
        if(IS_POST){
            //收集数据
            if($this->_model->create('','login') === false){
                $this->error(get_error($this->_model->getError()));
            }
            //执行修改
            if(($password = $this->_model->login()) === false){
                $this->error(get_error($this->_model->getError()));
            }
            
            //跳转
            $this->success('登陆成功',U('Index/index'));
        }else{
            $this->display();
        }
    }
    
    /**
     * 准备权限和角色数据,用于创建和修改管理员.
     */
    private function _before_view() {
        //准备所有的权限,用于ztree展示
        $permissions = D('Permission')->getList('id,name,parent_id');
        $this->assign('permissions', json_encode($permissions));
        //准备所有的角色
        $roles = D('Role')->getList('id,name');
        $this->assign('roles', $roles);
    }
    /**
     * 退出.
     */
    public function logout(){
        session(null);
        cookie(null);
        $this->success('退出成功',U('login'));
    }
}