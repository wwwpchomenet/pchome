<?php

/**
 * Description:我的需求model
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Model;
class MyNeedModel  extends \Think\Model{
    public function getPageResult(array $cond=array()){
       
        $cond = $cond + array(
            'my_need.status'=>array('gt',-1),
        );
        //获取总行数
        $count = $this->where($cond)->count();
        //获取页尺寸
        $size = C('PAGE_SIZE');
        $page_obj = new \Think\Page($count,$size);
        $page_obj->setConfig('theme', C('PAGE_THEME'));
        $page_html = $page_obj->show();
//        $rows = $this->where($cond)->page(I('get.p'),$size)->order('id desc')->select();
       $rows = $this->distinct(true)
            ->table('my_need')
            ->join('member  ON  my_need.member_id=member.id')
            ->order('my_need.add_time')
            ->where($cond)
            ->field('member.tel as mtel,member.name as mname,my_need.name,my_need.num,my_need.info,my_need.add_time')->select();

        return array(
            'rows'=>$rows,
            'page_html'=>$page_html,
        );
    }
}
