<?php

/**
 * Description:分公司扩展
 *
 * @author 青山<1501601174@qq.com>
 */
namespace Admin\Model;
class ExpandModel extends \Think\Model{
    protected $_validate = array(
        /**
         * 1.名字必填
         */
        array('name','require','分公司扩展名字不能为空',self::EXISTS_VALIDATE,'',self::MODEL_INSERT),
    );
    
    /**
     * 要求不使用数组函数,进行数组合并,要求如果元素键名冲突,就以第一个为准
     * @param array $cond
     * @return type
     */
    public function getPageResult(array $cond=array()){
        $cond = $cond + array(
            'status'=>array('eq',1),
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
    
    /**
     * 获取分公司扩展列表.
     * @param array $cond 条件
     * @return array
     */
    public function getList(array $cond=array()){
        $cond = $cond + array(
            'status'=>array('gt',0),
        );
        return $this->where($cond)->getField('id,id,name,is_help');
    }
}
