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

<body>
<section>
  <div class="na_con">
      <div class="mp_lish">

      	<div class="mp_lish_con">
        	<p class="mp_lish_name fl">会员等级</p>
                <p class="mp_lish_text fr">
                    <?php if($members['rank'] == 3 ): ?>高级会员
                        <?php elseif($members['rank'] == 2): ?>
                        中级会员
                        <?php else: ?>
                       普通会员<?php endif; ?>
                </p>
        </div>

      </div>
     <div class="mp_lish">
        <a class="mp_lish_con" href="<?php echo U('index.php/Admin/Myprofile/MyProfilePhone');?>">
            <p class="mp_lish_name fl">手机号码</p>
            <p class="mp_lish_jiantou fr"></p>
            <p class="mp_lish_text fr"><?php echo ($members['tel']); ?></p>
        </a>
      </div>
      <div class="mp_lish">
        <a class="mp_lish_con" href="<?php echo U('index.php/Admin/Myprofile/MyprofilePassword');?>">
            <p class="mp_lish_name fl">登录密码</p>
            <p class="mp_lish_jiantou fr"></p>
        </a>
      </div>
      <div class="mp_lish">
        <div class="mp_lish_con">
            <p class="mp_lish_name fl">真实姓名</p>
            <p class="mp_lish_text fr"><?php echo ($members['name']); ?></p>
        </div>
      </div>
      <div class="mp_lish">
        <div class="mp_lish_con">
            <p class="mp_lish_name fl">营业执照号码</p>
            <p class="mp_lish_text fr"><?php echo ($members['peimit']); ?></p>
        </div>
      </div>
      <div class="mp_lish">
        <div class="mp_lish_con">
            <p class="mp_lish_name fl">上传营业执照</p>
            <p class="mp_lish_text fr">已上传</p>
        </div>
      </div>
      
  </div>
  
</section>
</body>
</html>
  
<div class="in_footer">
    <div class="in_footer_lish fl"> <a href="<?php echo U('index.php/Admin/Banner/index');?>" class="">
        <div class="in_footer_lish_tu1"></div>
        <p class="in_footer_lish_zi">首页</p>
    </a> </div>
    <div class="in_footer_lish fl"> <a href="<?php echo U('index.php/Admin/goods/index');?>" class="in_footer_on">
        <div class="in_footer_lish_tu2"></div>
        <p class="in_footer_lish_zi">全部商品</p>
    </a> </div>
    <div class="in_footer_lish fl"> <a href="<?php echo U('index.php/Admin/GoodsList/getList');?>" class="">
        <div class="in_footer_lish_tu3"></div>
        <p class="in_footer_lish_zi">订货清单</p>
    </a> </div>
    <div class="in_footer_lish fl"> <a href="<?php echo U('index.php/Admin/Myprofile/MyProfile');?>" class="">
        <div class="in_footer_lish_tu4"></div>
        <p class="in_footer_lish_zi">我的帐号</p>
    </a> </div>
</div>
</body>

    <script type="text/javascript">
        $('.in_footer_lish_tu1').css({
            'background-position':'0px 0px',
        });
        $('.in_footer_lish_tu3').css({
            'background-position':'-72px 0px',
        });
        $('.in_footer_lish_tu2').css({
            'background-position':'-40px 0px',
        });
        $(function(){

            $('.in_footer_lish_tu4').css({
                width:26+'px',
                height:26+'px',
                background:'url(http://www.wap.com/iphone/Public/Images/icon.png)',
                'background-position':'-103px 30px',
                margin:0 +'auto',
                'margin-top': 8+'px',
            });
        })
    </script>