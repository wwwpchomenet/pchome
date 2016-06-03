<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/20
 * Time: 15:59
 */

namespace Admin\Model;
use Think\Model;
class ExpandModel extends Model{
    public function getDetails(){
        return $this->where(array('status'=>1))->select();
    }
}