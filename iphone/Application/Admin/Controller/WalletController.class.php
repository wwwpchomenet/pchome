<?php

/**
 * Description:微信端钱包
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Controller;
class WalletController extends \Think\Controller{
    
    /**
     * 1.获取用户的id  MEMBER_INFO 
     * 2.查询member表   保证金cash      余额 balance   已返佣金brokerage
     *
     */
    public function  wallet(){
        $member = session('MEMBER_INFO')['id'];
       if(empty($member)){
            $this->redirect('index.php/Admin/Member/login');
       }else{
        $rows = M('Member')->where(array('id'=>$member))->select();
        $this->assign('rows',$rows);
        $this->display('wallet');
       }
    }
}
