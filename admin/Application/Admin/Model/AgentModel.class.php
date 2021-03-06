<?php

/**
 * Description:我想成为代理商
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Model;
class AgentModel extends \Think\Model{
   public function  getPageResult(array $cond = array()){
       $cond = $cond + array(
            'status'=>array('gt',0),
        );
        //获取总行数
        $count = $this->where($cond)->count();
        //获取页尺寸
        $size = C('PAGE_SIZE');
        $page_obj = new \Think\Page($count,$size);
        $page_obj->setConfig('theme', C('PAGE_THEME'));
        $page_html = $page_obj->show();
        $rows = $this->where($cond)->page(I('get.p'),$size)->select();
        return array(
            'rows'=>$rows,
            'page_html'=>$page_html,
        );
   }
}
