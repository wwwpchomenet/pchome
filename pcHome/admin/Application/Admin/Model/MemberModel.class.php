<?php

/**
 * Description:代理商
 *
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Model;

class MemberModel extends \Think\Model {

    /**
     * 分页
     * @param array 查询的状态值
     * @return array 分页和结果集
     */
    public function showPage(array $conditions) {
        //合并数组
        $conditions += array(
            'is_del' => 1,
        );
        //获取配置文件分页
        $page_size = C('PAGE_SIZE');
        //查询总条数
        $count = $this->where($conditions)->count();
        //加载分页工具
        $page = new \Think\Page($count, $page_size);
        $show_page = $page->show();
        //查询结果集
        $rows = $this->where($conditions)->page(I('get.p'), $page_size)->select();
        //返回分页和结果集
        return array(
            'show_page' => $show_page,
            'rows' => $rows,
        );
    }

    /**
     * 获取指定地址下的地址
     * @param integer $parent_id  父级地址id
     * @return array
     */
    public function getListByParentId($parent_id = 0) {
        return M('locations')->where(array('parent_id' => $parent_id))->select();
    }

    
    /**
     * 获取数据
     * @param integer $id   查询id值
     * @return array    结果集
     */
    public function getList($id) {
        $rows = $this->find($id);
        return $rows;
    }

}
