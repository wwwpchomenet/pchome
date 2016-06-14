<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width,user-scalable=no,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<title></title>
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
      <?php if(is_array($address)): foreach($address as $k=>$address): ?><div class="set_head">
            <p class="add_dizhi fl">地址<?php echo $k+1;?></p>
              <?php if(($address['is_default'] == 1)): ?><b style="color: #009f95;float: right">默认</b><?php endif; ?>
              <a class="add_shezhi fr" href="<?php echo U('index.php/admin/OrderInfo/isDefault',array('isDefault'=>$address['id']));?>">设为默认</a>
          </div>
          <div class="set_dizhi mabott2">
            <a href="<?php echo U('index.php/admin/OrderInfo/edit',array('isDefault'=>$address['id']));?>">
                <p class="set_dizhi_head"><?php echo $address['detail_address'];?></p>
                <p class="set_dizhi_xinxi fl"><?php echo $address['name'];?> <?php echo $address['tel'];?></p>
                <p class="set_dizhi_xinxi fl"><?php echo $address['delivery_name'];?></p>
                <p class="set_dizhi_jiantou fr"></p>
                <p class="set_dizhi_fapiao">
                    发票抬头：XXXXXX
                    <span>税号：XXXXXX</span>
                </p>
            </a>
          </div><?php endforeach; endif; ?>
  </div>
  
  <a class="cp_adddizhi" href="<?php echo U('index.php/admin/OrderInfo/add');?>">
  	<p class="cp_adddizhi_tu fl">+</p>
  	<p class="cp_adddizhi_zi fl">新增地址</p>
   </a>
  <!-- footer -->
  <div class="in_footer">
  	<div class="in_footer_lish fl">
    	<a href="" class="">
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
    	<a href="" class="in_footer_on">
        	<div class="in_footer_lish_tu4"></div>
            <p class="in_footer_lish_zi">我的帐号</p>
        </a>
    </div>
  </div>
  <!-- end -->
</section>
</body>
</html>