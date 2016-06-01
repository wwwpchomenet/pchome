<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/6/1
 * Time: 10:13
 */

namespace Admin\Controller;


use Think\Controller;

class PersonalCenterController extends Controller{
    public function index(){
        //获取session的名字
       $member= session('MEMBER_INFO');
        $this->assign('member',$member);
        $this->display('PersonalCenter');
    }
}