<?php

/**
 * Description:微信端我的需求
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Model;
class MyNeedModel extends \Think\Model{
        public function getList(){
        $member = session('MEMBER_INFO')['id'];
        $rows = $this->where(array('member_id'=>$member))->order('id desc')->select();
        return $rows;
        }
}
