<?php

/**
 * Description:微信端我的需求
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Model;
class MyNeedModel extends \Think\Model{
    
        public function getPageResult(){
        $member = session('MEMBER_INFO')['tel'];
        $rows = $this->where(array('tel'=>$member))->order('id desc')->select();
        return $rows;
        }
}
