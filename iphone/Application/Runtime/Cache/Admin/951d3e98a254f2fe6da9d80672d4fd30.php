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
    
    <style type="text/css">
        .bg{
            background: pink;
        }
    </style>

</head>
<body>

<section>
  <div class="set_con">
      <?php if(is_array($address)): foreach($address as $k=>$address): ?><div class="set_head">
            <p class="add_dizhi fl">地址<?php echo $k+1;?></p>
            <a class="add_shezhi fr <?php echo $address['is_default']==1?'bg':'';?>" data="<?php echo $address['id'];?>" href="javascript:;">设为默认</a>
          </div>
          <div class="set_dizhi mabott2">
            <a href="<?php echo U('index.php/admin/Address/edit',array('id'=>$address['id']));?>">
                <p class="set_dizhi_head"><?php echo $address['detail_address'];?></p>
                <p class="set_dizhi_xinxi fl">姓名:<?php echo $address['name'];?> 电话:<?php echo $address['tel'];?></p>
                <p class="set_dizhi_xinxi fl"><?php echo $address['delivery_name'];?></p>
                <p class="set_dizhi_jiantou fr"></p>
                <p class="set_dizhi_fapiao">
                    发票抬头：<?php echo $address['invoice'];?>
                    <span>税号：<?php echo $address['ein'];?></span>
                </p>
            </a>
          </div><?php endforeach; endif; ?>
  </div>

  <a class="cp_adddizhi" href="<?php echo U('index.php/admin/Address/add');?>">
  	<p class="cp_adddizhi_tu fl">+</p>
  	<p class="cp_adddizhi_zi fl">新增地址</p>
   </a>
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
        })
    </script>

    <script type="text/javascript">
        $('.add_shezhi').on('click',function(){
            $(this).addClass('bg').parent().siblings().children('a').removeClass('bg');
            var id=$(this).attr('data');
            $.get("<?php echo U('index.php/admin/Address/isDefault');?>",{'isDefault':id},function(){

            });
        });
    </script>