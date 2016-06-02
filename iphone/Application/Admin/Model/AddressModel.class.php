<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 2016/6/1
 * Time: 11:17
 */

namespace Admin\Model;


use Think\Model;

class AddressModel extends Model{
    protected $_validate = [
        ['name', 'require', '用户名必填', self::EXISTS_VALIDATE, '', self::MODEL_INSERT],
        ['name', '2,16', '用户名长度应该在2-16位', self::EXISTS_VALIDATE, 'length', self::MODEL_INSERT],
        ['tel', 'require', '都什么年代了,该有个手机号了', self::EXISTS_VALIDATE, '', self::MODEL_INSERT],
        ['tel', '/^(13|14|15|17|18)\d{9}$/', '手机号不正确哦', self::EXISTS_VALIDATE,'','tell'],
        ['shop_name', 'require', '告诉我你的店铺名字吧', self::EXISTS_VALIDATE, '', self::MODEL_INSERT],
        ['detail_address', 'require', '我都不知道你住哪儿呢', self::EXISTS_VALIDATE, '', self::MODEL_INSERT],
    ];
    protected $_auto = [
        ['member_id', '_addUserid', self::MODEL_INSERT,'callback'],
    ];
    public function _addUserid(){
        return session('MEMBER_INFO')['id'];
    }
}