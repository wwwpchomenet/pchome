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
  <!-- 头部 -->
  <div class="in_head">
  	<div class="in_center">
        <p class="in_head_diqu fl">重庆</p>
        <div class="in_head_input fr">
            <div class="in_head_input_tu fl"></div>
            <div class="in_head_input_input fl"><input type="text" name="" id='search'/></div>
        </div>
    </div>
  </div>
  <!-- end -->  
  <!-- banner -->
  <div id="slideBox" class="slideBox">
    <div class="bd">
      <ul>
          <!--轮播图展示-->
          <?php if(is_array($rows)): foreach($rows as $key=>$row): ?><li><a href="" title=""><img src="http://www.wap.com/Uploads/<?php echo ($row["path"]); ?>"  alt="" /></a></li><?php endforeach; endif; ?>
      </ul>
    </div>
    <div class="hd">
      <ul>
      </ul>
    </div>
  </div>
  <script type="text/javascript">
  TouchSlide({ 
	slideCell:"#slideBox",
	titCell:".hd ul", 
	mainCell:".bd ul", 
	effect:"leftLoop", 
	autoPage:true,
	autoPlay:true 
  });
</script> 
  <!-- end --> 
  <!--menu-->
  <div class="menu">
    <ul>
      <li><a href=""><i><img src="http://www.wap.com/iphone/Public/Images/menu_icon1.png" /></i>
        <p>帐号管理</p>
        </a></li>
      <li><a href=""><i><img src="http://www.wap.com/iphone/Public/Images/menu_icon2.png"  /></i>
        <p>我的订单</p>
        </a></li>
      <li><a href=""><i><img src="http://www.wap.com/iphone/Public/Images/menu_icon3.png" /></i>
        <p>我的钱包</p>
        </a></li>
      <li><a href=""><i><img src="http://www.wap.com/iphone/Public/Images/menu_icon4.png" /></i>
        <p>收货地址</p>
        </a></li>
    </ul>
  </div>
  <!--end--> 
  <!--中间-->
  <div class="in_conner">
  	<div class="in_conner_lish">
    	<a href=""><img src="http://www.wap.com/iphone/Public/Images/1p.png" /></a>
    </div>
    <div class="in_conner_lish">
    	<a href=""><img src="http://www.wap.com/iphone/Public/Images/2p.png" /></a>
    </div>
    <div class="in_conner_lish">
    	<a href=""><img src="http://www.wap.com/iphone/Public/Images/1p.png" /></a>
    </div>
  </div>
  <!--end-->
  <!-- footer -->
  <div class="in_footer">
  	<div class="in_footer_lish fl">
    	<a href="" class="in_footer_on">
        	<div class="in_footer_lish_tu1"></div>
            <p class="in_footer_lish_zi">首页</p>
        </a>
    </div>
    <div class="in_footer_lish fl">
    	<a href="" class="">
        	<div class="in_footer_lish_tu2"></div>
            <p class="in_footer_lish_zi">全部商品</p>
        </a>
    </div>
    <div class="in_footer_lish fl">
    	<a href="" class="">
        	<div class="in_footer_lish_tu3"></div>
            <p class="in_footer_lish_zi">订货清单</p>
        </a>
    </div>
    <div class="in_footer_lish fl">
    	<a href="" class="">
        	<div class="in_footer_lish_tu4"></div>
            <p class="in_footer_lish_zi">我的帐号</p>
        </a>
    </div>
  </div>
  <!-- end -->
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
    <div class="in_footer_lish fl"> <a href="<?php echo U('index.php/Admin/PersonalCenter/index');?>" class="">
        <div class="in_footer_lish_tu4"></div>
        <p class="in_footer_lish_zi">我的帐号</p>
    </a> </div>
</div>
</body>

    <script type="text/javascript">
        $('.in_footer_lish_tu2').css({
            'background-position':'90px 0px',
        });
        $('.in_footer_lish_tu3').css({
            'background-position':'-72px 0px',
        });
        $('.in_footer_lish_tu4').css({
            'background-position':'-105px 0px',
        });
        $(function(){
            $('.in_footer_lish_tu1').css({
                width:26+'px',
                height:26+'px',
                background:'url(http://www.wap.com/iphone/Public/Images/icon.png)',
                'background-position':'-0px 30px',
                margin:0 +'auto',
                'margin-top': 8+'px',
            });
            $(document).keydown(function(event){
                var search=$('#search').val();
                if(event.keyCode==13){
                    window.location.href='<?php echo U("index.php/admin/Goods/showAll") ?>'+'?name='+search;
                }
            });
        });
    </script>