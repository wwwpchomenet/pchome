<?php

/**
 * Description:商品上传相册
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Controller;
class UploadsController extends \Think\Controller {

    /**
     * 用于上传文件.
     */
    public function upload() {
        //1.创建upload对象
        $config  = array(
       
        'maxSize'  => 1024000, //上传的文件大小限制 (0-不做限制)
        'exts'     => array('jpg', 'jpeg', 'png', 'gif'), //允许上传的文件后缀
        'autoSub'  => true, //自动子目录保存文件
        'subName'  => array('date', 'Ymd'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => '../Uploads/', //保存根路径
        'savePath' => 'Gallery/', //保存路径
        'saveName' => array('uniqid', '') //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
    );
        $upload    = new \Think\Upload($config);
        //2.执行上传
        $file_info = $upload->upload($_FILES);
        $file_url = $file_info['file']['savepath'].$file_info['file']['savename'];

        //3.返回上传的结果
        $return = array(
            'status'     => $file_info ? 1 : 0,//判断是否成功
            'file_url'   => $file_url,//路径
//            'url_prefix' => $config['URL_PREFIX'],
            'file_info'  => $file_info
        );
        $this->ajaxReturn($return);
    }

}
