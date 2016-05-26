<?php

/**
 * Description:logo上传
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Controller;
class UploadController extends \Think\Controller {

    /**
     * 用于上传文件.
     */
    public function upload() {
        //1.创建upload对象
        $config    = C('UPLOAD_SETTING');
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
