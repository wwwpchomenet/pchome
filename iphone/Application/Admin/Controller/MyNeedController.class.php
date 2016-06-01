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

    public function  index(){
        if(IS_POST){
            /**
             * 1.循环二维数组
             * 2.查询会员id值
             * 3.
             */
         $data = I("post.");
         var_dump($data);
        dump($this->_model->addAll($data));
     
         
//         $xuqiou = array();
//         foreach($data as $val){
//            $xuqiou[]=$val();
//            
//         }
//          dump($xuqiou);
//          exit;
         
         
        }else{
            $mid = session('MEMBER_INFO')['id'];
            if(empty($mid)){
                 $this->redirect('index.php/Admin/Member/login');
            }
            $this->assign('mid',$mid);
            $this->display('Singledemand');
        }
    }
}
