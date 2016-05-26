<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/19
 * Time: 17:30
 */

namespace Admin\Model;


use Think\Model;

class SupplierModel extends Model{
    public function addPics(){
        $pics=I('post.path');
        $bool=true;
        foreach($pics as $val){
            if(!$this->add(array('path'=>$val))){
                $bool=false;
            }
        }
        return  $bool;
    }
}