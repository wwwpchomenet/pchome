<?php

/**
 * Description: 验证码
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Controller;
class CaptchaController extends \Think\Controller{
    
    /**
     * 验证码.
     */
    public function  captcha(){
        //引入配置文件
        $options  =C('CAPTCHA_SETTING');
        //实例化验证码
        $verify=new \Think\Verify($options);
        //生成验证码
        $verify->entry();
    }
}
