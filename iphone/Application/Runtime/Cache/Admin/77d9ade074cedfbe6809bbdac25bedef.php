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
	<div class="pc_bjtu">
    	<div class="pc_bjtu_toux"><img src="http://www.wap.com/iphone/Public/Images/touxiang.jpg" /></div>
        <p class="pc_bjtu_title"><?php echo ($member["name"]); ?>( 
            <?php if($member["status"] == 1): ?>审核通过
                <?php elseif($member["status"] == -1): ?>
                待审核
                <?php elseif($member["status"] == ''): ?>
                <a href="<?php echo U('index.php/Admin/Member/login');?>">请登录</a>
                <?php else: ?>
                审核未通过<?php endif; ?>
            
            )</p>
        
    </div>  
    <div class="pc_user">
    	<a href="<?php echo U('index.php/Admin/Myprofile/MyProfile');?>">
        	<p class="pc_user_tu1 fl"></p>
            <p class="pc_user_zi fl">账户管理</p>
            <p class="set_dizhi_jiantou pc_top_10 fr"></p>
        </a>
    </div>
    <div class="pc_user">
    	<a href="<?php echo U('index.php/Admin/OrderInfo/setlist');?>">
        	<p class="pc_user_tu2 fl"></p>
            <p class="pc_user_zi fl">我的订单</p>
            <p class="set_dizhi_jiantou pc_top_10 fr"></p>
        </a>
    </div>
    <div class="pc_user">
    	<a href="<?php echo U('index.php/Admin/Wallet/wallet');?>">
        	<p class="pc_user_tu3 fl"></p>
            <p class="pc_user_zi fl">我的钱包</p>
            <p class="set_dizhi_jiantou pc_top_10 fr"></p>
        </a>
    </div>
    <div class="pc_user">
    	<a href="<?php echo U('index.php/Admin/Address/index');?>">
        	<p class="pc_user_tu4 fl"></p>
            <p class="pc_user_zi fl">地址发票</p>
            <p class="set_dizhi_jiantou pc_top_10 fr"></p>
        </a>
    </div>
    <div class="pc_user">
    	<a href="<?php echo U('index.php/Admin/MyNeed/index');?>">
        	<p class="pc_user_tu5 fl"></p>
            <p class="pc_user_zi fl">采购需求</p>
            <p class="set_dizhi_jiantou pc_top_10 fr"></p>
        </a>
    </div>
	<div class="pc_user">
    	<a href="">
        	<p class="pc_user_tu6 fl"></p>
            <p class="pc_user_zi fl">售后规则</p>
            <p class="set_dizhi_jiantou pc_top_10 fr"></p>
        </a>
    </div>
    <div class="pc_user">
    	<a href="<?php echo U('index.php/Admin/Member/logout');?>">
        	<p class="pc_user_tu4 fl"></p>
            <p class="pc_user_zi fl">登录|注销</p>
            <p class="set_dizhi_jiantou pc_top_10 fr"></p>
        </a>
    </div>
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
                'margin-top': 8+'px',
            });
        });
    </script>