<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/25
 * Time: 13:51
 */

namespace Admin\Model;


use Think\Model;

class MemberModel extends Model{
    public function dddd(){
        return $this->where(array('id'=>12))->select();
    }
}