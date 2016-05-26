<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/25
 * Time: 17:36
 */

namespace Admin\Controller;


use Think\Controller;

class OrderInfoController extends Controller{
    public function  index(){
        $this->display('address');
    }
}