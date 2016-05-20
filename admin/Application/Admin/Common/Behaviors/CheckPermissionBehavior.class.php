<?php

/**
 * Description:检查权限
 *
 * @author 青山<1501601174@qq.com>
 */

namespace Admin\Common\Behaviors;

class CheckPermissionBehavior extends \Think\Behavior {

  public function run(&$params) {
        $url = implode('/', [MODULE_NAME, CONTROLLER_NAME, ACTION_NAME]);
        $ignore = C('IGNORE_PATHS');
        if (in_array($url, $ignore)) {
            return true;
        }
        $userinfo = session('USERINFO');
        if (empty($userinfo)) {
            $admin_model = D('Admin');
            $admin_model->autoLogin();
            $userinfo = session('USERINFO');
        }
        if ($userinfo) {
            //如果发现是超级管理员用户,就可以操作任何请求
            if ($userinfo['username'] == 'admin') {
                return true;
            }
        }

        //获取用户可以访问的路径
        $paths = session('PATHS');
        if (!is_array($paths)) {
            $paths = [];
        }
        //获取当前请求的路径
        if (!in_array($url, $paths)) {
            $url = U('Admin/Admin/login');
            redirect($url);
        }
  }
}