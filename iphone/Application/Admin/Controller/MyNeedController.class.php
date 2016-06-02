<?php

/**
 * Description:微信端需求
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Controller;
class MyNeedController extends \Think\Controller{
    
    /**
     *
     * @var \Admin\Model\MyneedModel
     */
    private  $_model = null;
    /**
     * 设置标题和初始化模型
     */
    protected function _initialize(){
         $this->_model = D('MyNeed');
    }

    /**
     * 需求单提交到数据库
     */
    public function  index(){
        if(IS_POST){
            /**
             * 1.循环二维数组
             * 2.查询会员id值
             * 
             */
         $data = I("post.");
         dump($data);
        if($this->_model->addAll($data)===fasle){
            $this->error(get_error($this->_model->getError()));
              }else{
             //跳转到我的历史需求单
              }
        }else{
            $mname = session('MEMBER_INFO')['name'];
            $mtel =session('MEMBER_INFO')['tel'];
//            dump($mtel);
//            exit;
            if(empty($mname)){
                 $this->redirect('index.php/Admin/Member/login');
            }
            $this->assign('mname',$mname);
            $this->assign('mtel',$mtel);
            $this->display('Singledemand');
        }
    }
    
    /**
     * 历史清单
     * 1.获取session保存的id查询会员的需求
     * 
     */
    public function singledemand(){

        if(($rows = $this->_model->getList())===false){
             $this->error(get_error($this->_model->getError()));
        }
//        dump($rows);
//        exit;
         $this->assign('rows',$rows);
         $this->display('Singledemand_2');
    }
}
