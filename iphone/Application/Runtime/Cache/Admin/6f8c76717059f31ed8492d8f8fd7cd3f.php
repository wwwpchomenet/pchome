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
  	<a href="login.html" class="fl">登录</a>
    <a href="registered.html" class="lo_bottom fl">注册</a>
  </div>
 <form action="<?php echo U('index.php/Admin/Member/registeredNext');?>" enctype="multipart/form-data"  method="post" id='signup' >
    <div class="reg_registered">
    <div class="reg_registered_kk"><input type="text" placeholder="真实姓名" name='name' /></div>
    <div class="reg_registered_kk"><input type="text" placeholder="品牌名" name='brand'/></div>
    <div class="reg_registered_kk"><input type="text" placeholder="营业执照名" name='peimit'/></div> 
    <div class="reg_registered_file fl">
<!--    	<a href="javascript:void(0);" class="link">点击上传营业执照</a>-->
    	<input type="file" multiple="multiple" class='link'  name='picture[]' value='上传营业执照' />
    </div>
<!--    <div class="reg_registered_tu fl"><img src="images/cpt.jpg" /></div>-->
  </div>
     <input type='submit' class='lo_anniu' value='上传资料'>
 </form>
</section>
</body>
  
</body>