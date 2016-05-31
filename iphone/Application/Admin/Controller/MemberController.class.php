<?php

/**
 * Description:微信端登陆
 *
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Controller;

class MemberController extends \Think\Controller {

    /**
     * 存储模型对象
     * @var \Admin\Model\MemberModel
     */
    private $_model = null;

    /**
     * 设置标题和初始化模型
     */
    protected function _initialize() {
        $this->_model = D('Member');
    }

    /**
     * 用户注册
     */
    public function registerOne() {
        if (IS_POST) {
            if ($this->_model->create() === false) {
                $this->error(get_error($this->_model->getError()));
            }
            if ($this->_model->addMember() === false) {
                $this->error(get_error($this->_model->getError()));
            }
            $this->redirect('/index.php/Admin/Member/registeredNext');
        } else {
            $this->display('registered');
        }
    }

    /**
     * 第二张注册页面
     */
    public function registeredNext() {
        if (IS_POST) {

            //取出电话号码
            $tel = cookie('TEL');
            //清除cookie
            cookie('TEL', null);

            if ($this->_model->create() === false) {
                $this->error(get_error($this->_model->getError()));
            }
            if ($this->_model->where(array('tel' => $tel))->save() === false) {
                $this->error(get_error($this->_model->getError()));
            } else {
                $this->redirect('/index.php/Admin/Member/registeredOk');
            }
        }else{
            $this->display('registeredNext');
        }
    }

    public function registeredOk() {
        $this->display('registered_ok');
    }

    /**
     * 验证是否唯一.
     */
    public function checkUniqueByParams() {
        $model = D('Member');
        $cond = I('get.');
        if ($cond) {
            if ($model->where($cond)->count()) {
                $this->ajaxReturn(false);
            }
        }
        $this->ajaxReturn(true);
    }

    /**
     * 使用ajax发送验证码.
     * @param string $telphone
     */
    public function sendSMS($telphone) {
        $code = \Org\Util\String::randNumber(1000, 9999);
        //存session
        session('TEL_CAPTCHA', $code);
        //发短信
        $data = [
            'code' => $code,
            'product' => '国际火锅供应链',
        ];
        if (sendSMS($telphone, $data)){
            
            $this->success('发送成功');
        } else {
            $this->error('发送失败');
        }
    }

    /**
     * 前台会员登陆.
     */
    public function login() {
        if (IS_POST) {
            //收集数据
            if ($this->_model->create('', 'login') === false) {
                $this->error(get_error($this->_model->getError()));
            }
            //判断
            if (($password = $this->_model->login()) === false) {
                $this->error(get_error($this->_model->getError()));
            }
            $this->success('登陆成功',U('index.php/Admin/Banner/index'));
        } else {
            $this->display();
        }
    }

    /**
     * 退出.
     */
    public function logout() {
        //修复如果只传null,导致的不能销毁cookie的bug
        session('MEMBER_INFO',null);
        cookie('AUTO_LOGIN_TOKEN',null);
        cookie(null);
        $this->success('退出成功', U('login'));
    }

    /**
     * ajax获取登陆用户用户名.
     */
    public function getUserName() {
        $userinfo = session('MEMBER_INFO');
        if ($userinfo) {
            echo json_encode($userinfo['username']);
        } else {
            echo json_encode(false);
        }
        exit;
    }
}
