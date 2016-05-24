<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/19
 * Time: 17:30
 */

namespace Admin\Model;


use Think\Model;

class BannerModel extends Model{
    /**
     * 轮播图 信息入库
     * @return bool
     */
    public function addBanner(){
        $pics=I('post.path');
        $bool=true;
        foreach($pics as $val){
            if(!$this->add(array('banner_file'=>$val))){
                $bool=false;
            }
        }
        return  $bool;
    }
}