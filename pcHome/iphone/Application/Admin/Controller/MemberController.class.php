<?php

/**
 * Description:微信端登陆
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Controller;
class MemberController extends \Think\Controller{
    /**
     *存储模型对象
     * @var \Admin\Model\MemberModel
     */
    private $_model =null;
    /**
     * 设置标题和初始化模型
     */
    protected function _initialize(){
        $this->_model = D('Member');
    }
     /**
      * 用户注册
      */
    public function  registered(){
        if(IS_POST){
            if($this->_model->create()===false){
                $this->error(get_error($this->_model->getError()));
            }
            if($this->_model->addMember()===false){
                $this->error(get_error($this->_model->getError()));
            }
            $this->success('注册成功');
        }else{
        $this->display('registered');
        }
    }
    /**
     * 验证是否唯一.
     */
    public function checkUniqueByParams(){
        $model = D('Member');
        $cond = I('get.');
        if($cond){
            if($model->where($cond)->count()){
                $this->ajaxReturn(false);
            }
        }
        $this->ajaxReturn(true);
    }
    
    /**
     * 使用ajax发送验证码.
     * @param string $telphone
     */
    public function sendSMS($telphone){
        $code = \Org\Util\String::randNumber(1000, 9999);
        //存session
        session('TEL_CAPTCHA',$code);
        //发短信
        $data = [
            'code'=>$code,
            'product'=>'国际火锅供应链',
        ];
        if(sendSMS($telphone, $data)){
            $this->success('发送成功');
        }else{
            $this->error('发送失败');
        }
    }
}