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
<!--  ------------------表单开始--------------------->
   <form action="<?php echo U('index.php/Admin/Member/registerOne');?>" method="post" id='signup'>
  <div class="reg_registered">
	<div class="reg_registered_kk">
    	<input type="text" placeholder="手机号" class="reg_phone fl" name="tel" id='tel'/>
        <a  class="reg_yanma fr" onclick="bindPhoneNum(this)">获取验证码</a>
    </div>
    <div class="reg_registered_kk"><input type="text" placeholder="验证码" name="captcha"/></div>
  
    <div class="reg_registered_kk"><input type="password" placeholder="密码" name="password"/></div>
    <div class="reg_registered_kk"><input type="password" placeholder="再次输入密码" name="repassword"/></div> 
    <div class="reg_registered_kk"><input type="text" placeholder="销售码（选填）" name="invitation" /></div>  
  </div>
  
       <input type="submit" class="lo_anniu" value="注册提交资料">
<!--       <a class="lo_anniu" href="registeredNext.html">下一步</a>-->
   </form>
<!---------------------表单结束------------------------------------>
</section>
</body>
</html>

</body>

     <script type="text/javascript" src="http://www.wap.com/iphone/Public/ext/jquery_validation/jquery.validate.js"></script>
     <script type="text/javascript" src="http://www.wap.com/iphone/Public/ext/layer/layer.js"></script>
       <script type="text/javascript">
          
          function bindPhoneNum() {
            //发送ajax请求到后台
            var url = '<?php echo U("index.php/Admin/Member/sendSMS");?>';
            var data = {
                'telphone':$('#tel').val()
            };
            $.getJSON(url,data,function(response){
                if(response['status']===1){
                    layer.msg('验证码发送成功');
                }else{
                     layer.msg('稍等一下,再点击吧');
                }
                console.debug(response);
            });
            }
    </script>