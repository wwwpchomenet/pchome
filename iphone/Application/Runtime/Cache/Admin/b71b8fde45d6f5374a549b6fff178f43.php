<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="http://www.wap.com/iphone/Public/Css/index.css" />
<body style="background:#fff;">
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
  		<div class="lo_login_kk"><input type="text" name='tel' placeholder="手机号/用户名" /></div>
        <div class="lo_login_kk"><input type="password" name='password' placeholder="请输入密码" /></div>
        <p class="lo_login_reg">还没有帐号？<a href="registered.html">立即注册</a></p>
    <input type="submit" value="登录" class="lo_anniu" />
  </div>

<!--  <a class="lo_anniu" href=""></a>-->
  </form>

</section>
</body>
</html>