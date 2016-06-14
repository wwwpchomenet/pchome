<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width,user-scalable=no,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>重庆火锅国际供应链股份有限公司</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" href="http://www.wap.com/iphone/Public/Css/index.css" />
<script src="http://www.wap.com/iphone/Public/Js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://www.wap.com/iphone/Public/Js/TouchSlide.1.1.js" type="text/javascript" charset="utf-8"></script>
<script src="http://www.wap.com/iphone/Public/Js/public.js" type="text/javascript" charset="utf-8"></script>
     
</head>
<body>

<section>
  <!-- banner -->
  <div id="slideBox" class="slideBox">
    <div class="bd">
      <ul>
        <li><a title=""><img src="http://www.wap.com/iphone/Public/Images/2j.jpg"  alt="" /></a></li>
      </ul>
    </div>
  </div>
  <!-- end -->
  <div class="lo_bj">
  	<a href="<?php echo U('index.php/Admin/Member/login');?>" class="lo_bottom fl">登录</a>
    <a href="<?php echo U('index.php/Admin/Member/registered');?>" class="fl">注册</a>
  </div>
  <form action="<?php echo U('index.php/Admin/Member/login');?>" method="post">
  <div class="lo_login">
  		<div class="lo_login_kk"><input  type="text" name='tel' placeholder="手机号" /></div>
        <div class="lo_login_kk"><input type="password" name='password' placeholder="请输入密码" /></div>
        <p class="lo_login_reg">还没有帐号？<a href="<?php echo U('index.php/Admin/Member/registerOne');?>">立即注册</a></p>
        <p class="lo_login_reg">密码忘记？<a href="<?php echo U('index.php/Admin/Member/findpwd');?>">找回密码</a></p>
    <input type="submit" value="登录" class="lo_anniu" />
  </div>

<!--  <a class="lo_anniu" href=""></a>-->
  </form>

</section>

</body>