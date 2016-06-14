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

    <script src="http://www.wap.com/iphone/Public/ext/layer/layer.js"></script>
<section>
  <div class="sdxq_con">
    <div class="sdx_head">
    	<a class="sdx_head_on fl" href="<?php echo U('index.php/Admin/MyNeed/index');?>">我的需求单</a>
        <a class="fl" href="<?php echo U('index.php/Admin/MyNeed/singledemand');?>">历史需求单</a>
    </div> 
<!--   <form action="<?php echo U('index.php/Admin/MyNeed/index');?>" method="post">-->
    <div class="na_shuru">
      	<div class="na_shuru_90">
        	<p class="na_shuru_zi fl">商品名</p>
            <p class="na_shuru_input fl"><input type="text" value='' placeholder="请填写商品名称" id="name"></p>
        </div>
    </div>
    <div class="na_shuru">
      	<div class="na_shuru_90">
        	<p class="na_shuru_zi fl">数量</p>
            <p class="sd_shuru_input fl"><input type="text" placeholder="" id="num" value=''></p>
            <p class="na_shuru_zi fl">公斤</p>
        </div>
    </div>  
    <div class="sd_xuqiu">
    	<div class="sd_xuqiu_90">
        	<p class="sd_xuqiu_zi">具体需求</p>
            <p class="sd_xuqiu_textarea">
            	<textarea placeholder="请填写具体需求" id="info" value=''></textarea>
            </p>
            <input type="button" class="sd_xuqiu_qingdan fr" value="加入需求单" id='need' click="need()"/>
        </div>
    </div>
<!--   </form>-->
    <div class="sd_sppx ma_matop10" id='shangping'>
    	<div class="sd_sppx_lish">
            <p class="sd_sppx_head_1 fl">编号</p>
            <p class="sd_sppx_head_2 fl">商品名</p>
            <p class="sd_sppx_head_3 fl">数量</p>
            <p class="sd_sppx_head_4 fl">具体需求</p>
        </div>
        <div id='ma_main'></div>
    </div>
  </div>
  
  <!-- 红色区域 -->
  <a class="cp_dianjick"  id='tijiao'>提交需求订单</a>
  <!-- end --> 
  <!-- footer -->
  
  <block name='footer'>
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
            'background-position':'-40px 0px'
        });
        $('.in_footer_lish_tu1').css({
            'background-position':'0px 0px'
        });
        $('.in_footer_lish_tu3').css({
            'background-position':'-70px 0px'
        });
        $(function(){
                $('.in_footer_lish_tu4').css({
                    width:26+'px',
                    height:26+'px',
                    background:'url(http://www.wap.com/iphone/Public/Images/icon.png)',
                    'background-position':'-105px 30px',
                    margin:0 +'auto',
                    'margin-top': 8+'px',
                });
            });
        var i = 1;
       $(function(){
        $('#need').click(function(){
           //获取内容
           var name =$('#name').val();
           var num =$('#num').val();
           var info =$('#info').val();
        var html = '<div class="sd_sppx_lish">';
            html+='<a class="sd_sppx_head_1 fl">'+(i++) +'</a>';
            html+='<p class="sd_sppx_head_2 fl">'+name+'</p>';
            html+='<p class="sd_sppx_head_3 fl" >'+num+'</p>';
            html+='<p class="sd_sppx_head_4 fl" >'+info+'</p>';
            html+='</div>';
           $('#ma_main').append(html); 
        });
          //----------------------------------------------------------------  
          var data={};
          var mname='<?php echo ($mname); ?>';
          var tel='<?php echo ($mtel); ?>';
            console.debug(tel);
        $('#tijiao').click(function(){
            //大的div
            $('#ma_main').children().each(function(key,val){
//                console.debug($(this).children().index());
                var a =$($(this).children('p')[0]).text();
                var b =$($(this).children('p')[1]).text();
                var c =$($(this).children('p')[2]).text();
              data[key]={
                  'name':a,
                  'num':b,
                  'info':c,
                 'member':mname,
                 'tel':tel
              };
    });
         $.post("<?php echo U('index.php/Admin/MyNeed/index');?>",data,function(sion){
             console.debug(sion);
             layer.msg('成功加入需求清单');
         });
     console.debug(data);
           });
  });
    </script>