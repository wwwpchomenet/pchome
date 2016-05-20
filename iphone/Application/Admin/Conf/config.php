<?php
define('DOMAIN', 'http://www.wap.com/iphone');
return array(
    //'配置项'=>'配置值'
    'DB_TYPE' => 'mysqli', // 数据库类型
    'DB_HOST' => '192.168.1.100', // 服务器地址
    'DB_NAME' => 'wap', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => '123456', // 密码
    'DB_PORT' => '3306', // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_PARAMS' => array(), // 数据库连接参数
    'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE' => false, // 启用字段缓存
    'DB_CHARSET' => 'utf8', // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE' => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE' => false, // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM' => 1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO' => '', // 指定从服务器序号
    'URL_MODEL' => 2,
    'SHOW_PAGE_TRACE'=>true,//开启调试模式
    'TMPL_PARSE_STRING' => array(
        '__CSS__' => DOMAIN."/Public/Css",
        '__JS__' => DOMAIN."/Public/Js",
        '__IMG__' => DOMAIN."/Public/Images",
        '__UEDITOR__'=>DOMAIN."/Public/ext/ueditor",
        '__TREEGRID__'=>DOMAIN."/Public/ext/treegrid",
        '__ZTREE__'=>DOMAIN."/Public/ext/ztree",
        '__UPLOADIFY__'=>DOMAIN."/Public/ext/uploadify",
        '__ZTREE__'=>DOMAIN."/Public/ext/zTree",
        '__LAYER__'=>DOMAIN."/Public/ext/layer",
        '__UPLOAD_URL_PREFIX__'=>"http://www.wap.com"."/Uploads",
        '__EXT__'=>DOMAIN."/Public/ext"
    ),
    'CAPTCHA_SETTING'   =>array(   //验证码长度
        'length' => 4,
    ),
    'IGNORE_PATHS'=>[
        'Admin/Admin/login',
        'Admin/Captcha/captcha',
        'Admin/Index/index',
        'Admin/Index/top',
        'Admin/Index/menu',
        'Admin/Index/main',
    ],
    'TMPL_CACHE_ON'     => false,
    'PAGE_SIZE'         => 1,
    'PAGE_THEME'        => '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%',
    'UPLOAD_SETTING'    => array(

        'maxSize'  => 1024000, //上传的文件大小限制 (0-不做限制)
        'exts'     => array('jpg', 'jpeg', 'png', 'gif'), //允许上传的文件后缀
        'autoSub'  => true, //自动子目录保存文件
        'subName'  => array('date', 'Ymd'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => '../Uploads/', //保存根路径
        'savePath' => 'logo/', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
    ),
);
