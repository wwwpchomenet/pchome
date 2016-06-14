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
  	  <div class="sdx_head">
    	<a class="fl" href="<?php echo U('index.php/Admin/OrderInfo/showTwo2');?>">订单状态</a>
        <a class="sdx_head_on fl" href="<?php echo U('index.php/Admin/OrderInfo/showList');?>">订单详情</a>
      </div>
        
      <div class="os_head">
		<div class="os_conter">
        	<p class="os_conter_qingdan fl">您的订货清单</p>
                <p class="os_conter_jiage fr" >价格总计 ￥<b id="sk"></b></p> 
        </div>
         
      </div> 
       <?php if(is_array($rows)): foreach($rows as $key=>$row): ?><div class="set_cplish">
        <div class="set_cplish_tu fl"><img src="http://www.wap.com/Uploads/<?php echo ($row['logo']); ?>" /></div>
        <div class="set_cplish_text fl">
            <div class="set_cplish_text_title">
                <p class="set_cplish_text_title_1 fl"><?php echo ($row['good_name']); ?></p>
                <p class="set_cplish_text_title_2 fr">￥<?php echo ($row['price']); ?></p>
            </div>
            <p class="set_cplish_text_gongjin"><b><?php echo ($row['univalence']); ?></b>元/公斤<span>x <?php echo ($row['num']); ?></span></p>
            <p class="set_cplish_text_gongjin">（<?php echo ($row['norms']); ?>公斤起订）</p>
            <input type='hidden' class='coutnum' value="<?php echo ($row['countmeny']); ?>" />
            <input type='hidden' class='title_name' value="<?php echo ($row['title_name']); ?>" />
            <input type='hidden' class='name' value="<?php echo ($row['name']); ?>" />
            <input type='hidden' class='duty' value="<?php echo ($row['duty']); ?>" />
            <input type='hidden' class='tel' value="<?php echo ($row['tel']); ?>" />
            <input type='hidden' class='detail_address' value="<?php echo ($row['detail_address']); ?>" />
        </div>
      </div><?php endforeach; endif; ?>
      <div class="set_alldingdan">
        <a href="">查看全部订货清单</a>
      </div>
      
      <div class="set_head ma_matop20">
        <p>您的收货地址</p>
      </div>
      <div class="set_dizhi">
        <a href="">
            <p class="set_dizhi_head"> </p>
            <p class="set_dizhi_xinxi fl"></p>
            <p class="set_dizhi_jiantou fr"></p>
            <p class="set_dizhi_fapiao">
                <b class="fabiao"> 发票抬头：</b>
                <span class="suihao">税号：</span>
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
            'background-position': '0px 0px',
        });
        $('.in_footer_lish_tu3').css({
            'background-position': '-0px 0px',
        });
        $('.in_footer_lish_tu2').css({
            'background-position': '-40px 0px',
        });
        $(function () {

            $('.in_footer_lish_tu3').css({
                width: 26 + 'px',
                height: 26 + 'px',
                background: 'url(http://www.wap.com/iphone/Public/Images/icon.png)',
                'background-position': '57px 30px',
                margin: 0 + 'auto',
                'margin-top': 8 + 'px',
            });
        })
       //设置总金额
      var coutnum =  $('.coutnum').val();
      $('#sk').after(coutnum);
      //设置收获地址
      var detail_address = $('.detail_address').val();
      $('.set_dizhi_head').append(detail_address);
      //设置收货人
      var name = $('.name').val();
      $('.set_dizhi_xinxi').append(name);
      //设置电话号码
      var tel = $('.tel').val();
       $('.set_dizhi_xinxi').append('&nbsp;&nbsp;&nbsp;'+ tel);
       //发票抬头
       var title_name = $('.title_name').val();
       $('.fabiao').append(title_name);
       //税号
       var duty = $('.duty').val();
       $('.suihao').append(duty);
          
   </script>