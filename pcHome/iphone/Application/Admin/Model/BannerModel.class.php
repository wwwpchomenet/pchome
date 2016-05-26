<?php

/**
 * Description:微信商品首页
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Model;
class BannerModel extends \Think\Model{
    
    public function getList(){
        return $this->select();
    }
}
