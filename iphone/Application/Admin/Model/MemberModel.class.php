<?php

/**
 * Description:
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Model;
class MemberModel extends \Think\Model{
     /**
     * :验证
     * 用户名 必填 2-16位 唯一
     * 密码 必填 6-16位
     * 手机号码 必填 正则手机号码 唯一
     * 手机验证码 自定义验证
     * @var array 
     */
    protected $_validate = [
        ['name', 'require', '用户名必填', self::EXISTS_VALIDATE, '', self::MODEL_INSERT],
       ['name', '2,16', '用户名长度应该在2-16位', self::EXISTS_VALIDATE, 'length', self::MODEL_INSERT],
         ['tel', 'require', '手机号码必填', self::EXISTS_VALIDATE, '', self::MODEL_INSERT],
        ['peimit', 'require', '营业执照必填', self::EXISTS_VALIDATE, '', self::MODEL_INSERT],
       ['tel', '', '手机号码已存在,请直接登录', self::EXISTS_VALIDATE, 'unique', self::MODEL_INSERT],
        ['tel', '/^(13|14|15|17|18)\d{9}$/', '手机号码不合法', self::EXISTS_VALIDATE, 'regex', self::MODEL_INSERT],
       ['captcha', 'checkPhoneCode', '手机验证码不正确', self::EXISTS_VALIDATE, 'callback', self::MODEL_INSERT],
        ['password', 'require', '密码必填', self::EXISTS_VALIDATE, '', self::MODEL_INSERT],
        ['password', '6,16', '密码长度应该在6-16位', self::EXISTS_VALIDATE, 'length', self::MODEL_INSERT],
       ['repassword', 'password', '两次密码不一致', self::EXISTS_VALIDATE, 'confirm', self::MODEL_INSERT],
        ['tel', 'require', '手机号码必填', self::MUST_VALIDATE, '', 'login'],
       ['password', 'require', '密码错误', self::MUST_VALIDATE, '', 'login'],
         ['tel', 'require', '手机号码必填', self::MUST_VALIDATE, '', 'tell'],
        ['captcha', 'require', '手机验证码必填', self::MUST_VALIDATE, '', 'tell'],
        ['tel', '/^(13|14|15|17|18)\d{9}$/', '手机号码不合法', self::EXISTS_VALIDATE,'','tell'],
         ['captcha', 'checkPhoneCode', '手机验证码不正确', self::EXISTS_VALIDATE, 'callback','tell'],
    ];
   
    /**
     * 自动完成,随机盐,注册时间.
     * 
     */
    protected $_auto = [
//        ['salt', 'Org\Util\String::randString', self::MODEL_INSERT, 'function'],
          ['add_time', NOW_TIME, self::MODEL_INSERT],
          ['picture', 'uploadsPic', self::MODEL_INSERT,'callback'],
    ];
    /**
     * 验证手机验证码.
     * @param string $code 用户输入的手机验证码.
     * @return boolean
     */
    protected function checkPhoneCode($code) {
        //获取session中的验证码
        $session_code = session('TEL_CAPTCHA');
        session('TEL_CAPTCHA', null);
        return $code == $session_code;
    }
    
     public function  addMember(){
        $request_data = $this->data;
        $tel = $request_data['tel'];
        cookie('TEL',$tel);
        $this->data['password']=  md5($this->data['password']);
          if (($member_id = $this->add()) === false) {
            return false;
        }
        return true;
    }
       
    /**
     * 1.验证验证码[自动验证]
     * 2.用户名和密码必填[自动验证]
     * 3.验证用户名是否存在
     * 4.验证密码是否匹配
     */
    public function login(){
        //为了安全我们将用户信息都删除
        session('MEMBER_INFO',null);
        $request_data = $this->data;
//        dump($request_data);
        //1.验证用户名是否存在
        $userinfo = $this->getByTel($this->data['tel']);
//        dump($userinfo);
//        exit;
        if(empty($userinfo)){
            $this->error = '用户不存在';
            return false;
        }
        //2.进行密码匹配验证
//        $password = salt_password($request_data['password'], $userinfo['salt']);
        $password =  md5($request_data['password']);
        if($password != $userinfo['password']){

            $this->error = '密码不正确';
            return false;
        }
       if($request_data['status'] !== 1){
          $this->error = '管理员还没验证,请验证后在登陆';
           
            //header('./index.php/Admin/Member/registeredOk');
          // $this->success('/index.php/Admin/Member/registeredOk');
              return false;
        }
        
        //为了后续会话获取用户信息,我们存下来
        session('MEMBER_INFO',$userinfo);
        
//        //保存自动登陆信息
//        $this->_saveToken($userinfo['id']);
//        if($this->_cookie2db() === false){
//            $this->error = '购物车同步失败';
//            return false;
//        }
       return true;
    }
    
    /**
     * 判断用户是否需要自动登陆,如果需要就保存令牌到cookie和数据表中.
     * @param integer $member_id 管理员id.
     */
    private function _saveToken($member_id){
        //清空原有的令牌
        $token_model = M('MemberToken');
        cookie('AUTO_LOGIN_TOKEN',null);
        $token_model->delete($member_id);
        
        //判断是否需要自动登陆
        $remeber = I('post.remember');
        if(!$remeber){
            return true;
        }
        $data = [
            'member_id'=>$member_id,
            'token'=>sha1(mcrypt_create_iv(32)),
        ];
        //存到cookie和数据表中
        cookie('AUTO_LOGIN_TOKEN',$data,604800);
        return $token_model->add($data);
    }

    /**自动完成图片上传功能
     * @return string
     */
    public function uploadsPic() {
        //1.创建upload对象
        $config  = array(
            'maxSize'  => 1024000, //上传的文件大小限制 (0-不做限制)
            'exts'     => array('jpg', 'jpeg', 'png', 'gif'), //允许上传的文件后缀
            'autoSub'  => true, //自动子目录保存文件
            'subName'  => array('date', 'Ymd'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
            'rootPath' => '../Uploads/', //保存根路径
            'savePath' => 'license/', //保存路径
        );
        $upload    = new \Think\Upload($config);
        //2.执行上传
        $file_info = $upload->upload();
        $picname=array();
        foreach($file_info as $key=>$val){
            $picname[]=$val['savepath'].$val['savename'];
        }
        return implode(',',$picname);
    }
}