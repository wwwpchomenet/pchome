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
    <?php if(is_array($rows)): foreach($rows as $key=>$row): ?><div class="na_con">
      <div class="mp_lish">
      	<div class="mp_lish_con">
        	<p class="mp_lish_name fl">保证金</p>
            <p class="wt_lish_text fl">￥<?php echo ($row["cash"]); ?></p>
        </div>
      </div>
      <div class="mp_lish">
      	<div class="mp_lish_con">
        	<p class="mp_lish_name fl">可用余额</p>
            <p class="wt_lish_text fl">￥<?php echo ($row["balance"]); ?></p>
        </div>
      </div>
      <div class="mp_lish">
      	<div class="mp_lish_con">
        	<p class="mp_lish_name fl">已反佣金</p>
            <p class="wt_lish_text fl">￥<?php echo ($row["brokerage"]); ?></p>
        </div>
      </div>
      
  </div><?php endforeach; endif; ?>
  <!-- 红色区域 -->
  
</section>

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
    <div class="in_footer_lish fl"> <a href="<?php echo U('index.php/Admin/PersonalCenter/index');?>" class="">
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
                'margin-top': 8+'px'
            });
        });
    </script>