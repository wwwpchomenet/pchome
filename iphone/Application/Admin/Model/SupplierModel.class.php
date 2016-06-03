<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/20
 * Time: 15:13
 */

namespace Admin\Model;


use Think\Model;

class SupplierModel extends Model{
    public function getPic(){
        return $this->where(array('status'=>1))->limit(8)->getField('path',true);
    }
}