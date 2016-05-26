<?php

/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/5/20
 * Time: 9:44
 */
namespace Admin\Model;
use Think\Model;
class AgentModel extends Model{

    protected $_validate = array(
        array('name', 'require', '用户名不能为空', self::EXISTS_VALIDATE, '', self::MODEL_INSERT),
        array('email', '/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i', '邮箱不正确 ', self::EXISTS_VALIDATE, 'regex', self::MODEL_INSERT),
        array('tel', "/13[123569]{1}\d{8}|15[1235689]\d{8}|188\d{8}/", '电话不能为空', self::EXISTS_VALIDATE, 'regex', self::MODEL_INSERT),
        array('intro', 'require', '留言不能为空', self::EXISTS_VALIDATE, '', self::MODEL_INSERT),
    );

    protected $_auto     = array(
        array('inpittime', NOW_TIME, self::MODEL_INSERT),
    );
    public function message(){
        $msg= I('post.');
        if($this->add($msg)){
            return true;
        }
        return false;
    }
}