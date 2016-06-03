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
  <div class="set_con">
      <div class="set_head">
        <p>您的订货清单</p>
      </div>
      <?php if(is_array($goodsList)): foreach($goodsList as $key=>$goodsList): ?><div class="set_cplish">
        <div class="set_cplish_tu fl"><img src="http://www.wap.com/Uploads/<?php echo $goodsList['logo'];?>" /></div>
        <div class="set_cplish_text fl">
            <div class="set_cplish_text_title">
                <p class="set_cplish_text_title_1 fl"><?php echo $goodsList['name'];?></p>
                <p class="set_cplish_text_title_2 fr">￥<?php echo $goodsList['market_price']*$goodsList['num'];?></p>
            </div>
            <p class="set_cplish_text_gongjin"><b><?php echo $goodsList['market_price'];?></b>元/公斤<span>x <?php echo $goodsList['num'];?></span></p>
            <p class="set_cplish_text_gongjin">（<?php echo $goodsList['norintro'];?>公斤起订）</p>
        </div>
      </div><?php endforeach; endif; ?>
      <div class="set_alldingdan">
        <a href="">查看全部订货清单</a>
      </div>
      
      <div class="set_head ma_matop20">
        <p>您的收货地址</p>
      </div>
      <div class="set_dizhi">
        <a href="<?php echo U('index.php/Admin/Address/index');?>">
            <p class="set_dizhi_head"><?php echo $AddressDefault['detail_address'];?></p>
            <p class="set_dizhi_xinxi fl"><?php echo $AddressDefault['name'];?> <?php echo $AddressDefault['tel'];?></p>
            <p class="set_dizhi_jiantou fr"></p>
            <p class="set_dizhi_fapiao">
                发票抬头：<?php echo $AddressDefault['invoice'];?>
                <span>税号：<?php echo $AddressDefault['ein'];?></span>
            </p>
        </a>
      </div>
      <div class="set_head ma_matop20">
        <p>付款方式</p>
      </div>
      <div class="set_fukuan">
      	<a href="">
        	<p class="fl">货到付款</p>
            <p class="set_dizhi_jiantou fr" style="margin-top: 6px;"></p>
        </a>
      </div>
  </div>
  <div class="cp_dianjick">
    <p class="pro_jiage fl">总金额为:<span style="color:red;"></span></p>
    <a class="pro_qingdan fl" href="">提交订单</a> 
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

    <script type="text/javascript" charset="utf-8">
        $('.in_footer_lish_tu2').css({
            'background-position':'-40px 0px',
        });
        $(function(){

            $('.in_footer_lish_tu3').css({
                width:26+'px',
                height:26+'px',
                background:'url(http://www.wap.com/iphone/Public/Images/icon.png)',
                'background-position':'-72px 30px',
                margin:0 +'auto',
                'margin-top': 8+'px',
            });
            var sum=0;
            if($('.pro_jiage').children().text()==''||$('.pro_jiage').children().text()==0){
            $('.set_cplish_text_title_2').each(function(){
                var s=parseInt($(this).text().substring(1));
                sum=s+sum;
            });
                $('.pro_jiage').children().text(sum);
            }
        });
    </script>