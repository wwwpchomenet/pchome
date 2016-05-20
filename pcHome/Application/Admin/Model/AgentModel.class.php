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
        array('email', 'require', '邮箱不能为空', self::EXISTS_VALIDATE, '', self::MODEL_INSERT),
        array('tel', 'require', '电话不能为空', self::EXISTS_VALIDATE, '', self::MODEL_INSERT),
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