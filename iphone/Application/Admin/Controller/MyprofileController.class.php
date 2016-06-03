<?php

/**
 * Description:微信个人中心
 *
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Controller;

class MyprofileController extends \Think\Controller {

    /**
     * 存储模型对象.
     * @var \Admin\Model\MyprofileModel
     */
    private $_model = null;

    protected function _initialize() {
        $this->_model = D('Member');
    }

    /**
     * 个人中心首页
     * 开发思路
     * .根据用户登陆信息id,seesion中获取
     */
    public function MyProfile() {
        //获取id值用户登陆信息
        $member = session('MEMBER_INFO');
        if (empty($member)) {
            $this->display('Member/login');
        } else {
            $this->assign('members', $member);
            $this->display();
        }
    }

    /**
     * 个人中心修改手机号码
     */
    public function MyProfilePhone() {
        $member = session('MEMBER_INFO');
        if (IS_POST) {
            if ($this->_model->create('', 'tell') === false) {
                $this->error(get_error($this->_model->getError()));
            }
            $tel = I('post.tel');
            if ($this->_model->where(array('id' => $member['id']))->setField('tel', $tel) === false) {
                $this->error(get_error($this->_model->getError()));
            } else {
                //清除会员信息
                session('MEMBER_INFO', null);
                $this->success('修改成功,请重新登录', U('index.php/Admin/Member/login'));
            }
        } else {

            if (empty($member)) {
                $this->display('Member/login');
            } else {
                $this->assign('members', $member);
                $this->display('MyProfile_phone');
            }
        }
    }

    /**
     * 个人中心修改密码
     * 1.从数据库中读取密码,加密后,看是否与原来的密码相匹配
     * 2.判断新密码和确认密码是否一致
     * 3.对新密码加密保存数据库
     */
    public function MyprofilePassword() {
        if (IS_POST) {
            $info = I("post.");
            $member = session('MEMBER_INFO');
           if(empty($info['agopassword'])){
                $this->error('请填写原始密码',U("index.php/Admin/Myprofile/MyprofilePassword"));
                exit;
           }
            if (md5($info['agopassword']) !== $member['password']) {
                 $this->error('原始密码不正确,请重新输入',U("index.php/Admin/Myprofile/MyprofilePassword"));
                exit;
            }
            if(empty($info['password'])){
                $this->error('请填写密码',U("index.php/Admin/Myprofile/MyprofilePassword"));
                exit;
           }
            if ($info['password'] !== $info['repassword']) {
                $this->error ('两次密码不正确,请重新输入',U('index.php/Admin/Myprofile/MyprofilePassword'));
                exit;
            }
            $password = md5($info['password']);
            if ($this->_model->where(array('id' => $member['id']))->setField('password',$password)===false) {
                $this->error(get_error($this->_model->getError()));
            } else {
                session('MEMBER_INFO',null);
                $this->success('修改成功,请重新登录', U('index.php/Admin/Member/login'));
            }
        } else {
            $this->display('MyProfile_password');
        }
    }
    
    
}
