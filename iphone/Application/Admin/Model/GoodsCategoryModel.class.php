<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/21
 * Time: 10:50
 */

namespace Admin\Model;


use Think\Model;

class GoodsCategoryModel extends Model{
    public function getGoods(){
       $goods= $this->limit(6)->getField('id,name',true);
        $data=array(0=>'全部');
        foreach($goods as $key=>$val){
            $data[$key]=$val;
        }
        return $data;
    }
}