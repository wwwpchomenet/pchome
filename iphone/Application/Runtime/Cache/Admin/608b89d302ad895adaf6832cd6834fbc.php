<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width,user-scalable=no,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>重庆火锅国际供应链股份有限公司</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" href="http://www.wap.com/Public/Css/index.css" />
<script src="http://www.wap.com/Public/Js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://www.wap.com/Public/Js/TouchSlide.1.1.js" type="text/javascript" charset="utf-8"></script>
<script src="http://www.wap.com/Public/Js/public.js" type="text/javascript" charset="utf-8"></script>
     
</head>
<body>

<section>
    <form name="form1" action="<?php echo $AddressEdit?U('index.php/admin/Address/edit'):U('index.php/admin/Address/add');?>" method="post">
          <div class="na_con">
              <div class="na_head">联系人</div>
              <div class="na_shuru">
                <div class="na_shuru_90">
                    <p class="na_shuru_zi fl">姓名</p>
                    <p class="na_shuru_input fl"><input type="text" name="name"value="<?php echo $AddressEdit['name'];?>" placeholder="请填写收货人姓名" /></p>
                </div>
              </div>
              <div class="na_shuru">
                <div class="na_shuru_90">
                    <p class="na_shuru_zi fl">电话</p>
                    <p class="na_shuru_input fl"><input type="text" name="tel"value="<?php echo $AddressEdit['tel'];?>" placeholder="请填写收货手机号码" /></p>
                </div>
              </div>
              <div class="na_shuru">
                <div class="na_shuru_90">
                    <p class="na_shuru_zi fl">店铺名</p>
                    <p class="na_shuru_input fl"><input type="text" value="<?php echo $AddressEdit['shop_name'];?>" name="shop_name" placeholder="请填写店铺名称" /></p>
                </div>
              </div>
              <div class="na_shuru">
                <div class="na_shuru_90">
                    <p class="na_shuru_zi fl">地址</p>
                    <p class="na_shuru_input fl"><input type="text" value="<?php echo $AddressEdit['detail_address'];?>" name="detail_address" placeholder="请填写您的详细收货地址" /></p>
                </div>
              </div>

              <div class="na_head">联系人</div>
              <div class="na_shuru">
                <div class="na_shuru_90">
                    <p class="na_shuru_zi fl">发票抬头</p>
                    <p class="na_shuru_input fl"><input type="text" value="<?php echo $AddressEdit['invoice'];?>" name="invoice" placeholder="请填写发票抬头" /></p>
                </div>
              </div>
              <div class="na_shuru">
                <div class="na_shuru_90">
                    <p class="na_shuru_zi fl">税号</p>
                    <p class="na_shuru_input fl"><input type="text" value="<?php echo $AddressEdit['ein'];?>" name="ein" placeholder="请填写税号" /></p>
                </div>
              </div>
          </div>
        <?php if(($AddressEdit)): ?><input type="hidden" name="id" value="<?php echo $AddressEdit['id'];?>"><?php endif; ?>
    </form>
  
  <!-- 红色区域 -->
    <?php if(($AddressEdit)): ?><div class="na_dianjick">
            <a class="na_shanchu fl" href="<?php echo U('index.php/admin/Address/delete',array('id'=>$AddressEdit['id']));?>">
                <div class="na_sccon">
                    <p class="na_tubiao fl"></p>
                    <p class="na_ziti fl">删除地址</p>
                </div>
            </a>
            <a class="na_baocun fl" href="javascript:;"  onclick="submit()">
                <div class="na_sccon">
                    <p class="na_tubiao2 fl"></p>
                    <p class="na_ziti2 fl">修改地址</p>
                </div>
            </a>
        </div>
    <?php else: ?>
        <a class="cp_dianjick fl" href="javascript:;"  onclick="submit()">添加地址</a><?php endif; ?>
  <!-- end -->
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

    <script  type="text/javascript">
        function submit(){
            document.form1.submit();
        }
    </script>