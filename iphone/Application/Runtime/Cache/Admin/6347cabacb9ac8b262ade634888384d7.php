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
                <a class="sdx_head_on fl">订单状态</a>
                <a class="fl" href="<?php echo U('index.php/Admin/OrderInfo/showList');?>">订单详情</a>
            </div>
            <!-- 状态 --> 
            <div class="os_zhuangtai">
                <div class="os_zhuangtai_left fl">
                    <?php if(is_array($rows)): foreach($rows as $key=>$row): if($row['status'] == 1): ?><p class="os_zhuangtai_tu1"></p>
                            <?php elseif($row['status'] == 2): ?>
                            <p class="os_zhuangtai_tu1"></p>
                            <p class="os_zhuangtai_shu"></p>
                            <p class="os_zhuangtai_tu2"></p>
                            <?php elseif($row['status'] == 3): ?>
                            <p class="os_zhuangtai_tu1"></p>
                            <p class="os_zhuangtai_shu"></p>
                            <p class="os_zhuangtai_tu2"></p>
                            <p class="os_zhuangtai_shu"></p>
                            <p class="os_zhuangtai_tu3"></p>
                            <?php elseif($row['status'] == 4): ?>
                            <p class="os_zhuangtai_tu1"></p>
                            <p class="os_zhuangtai_shu"></p>
                            <p class="os_zhuangtai_tu2"></p>
                            <p class="os_zhuangtai_shu"></p>
                            <p class="os_zhuangtai_tu3"></p>
                            <p class="os_zhuangtai_shu"></p>
                            <p class="os_zhuangtai_tu4"></p>
                            <?php else: endif; endforeach; endif; ?>
                </div>
                <div class="os_zhuangtai_right fr">
                     <?php if(is_array($rows)): foreach($rows as $key=>$row): if($row['status'] == 1 ): ?><div class="os_zhuangtai_kk fr">
                	<div class="os_zhuangtai_kk_head">
                    	<p class="os_zhuangtai_kk_head_text fl">订单已提交成功</p>
                        <p class="os_zhuangtai_kk_head_time fr"><?php echo ($row['add_time']); ?></p>
                    </div>
                    <p class="os_zhuangtai_kk_zt">商品准备中</p>
                    <p class="os_zhuangtai_kk_jj"></p>
                </div>
                  <?php elseif($row['status'] == 2): ?>
                   <div class="os_zhuangtai_kk fr">
                	<div class="os_zhuangtai_kk_head">
                    	<p class="os_zhuangtai_kk_head_text fl">订单已提交成功</p>
                        <p class="os_zhuangtai_kk_head_time fr"><?php echo ($row['add_time']); ?></p>
                    </div>
                    <p class="os_zhuangtai_kk_zt">商品准备中</p>
                    <p class="os_zhuangtai_kk_jj"></p>
                </div>             
                 <div class="os_zhuangtai_kk fr">
                	<div class="os_zhuangtai_kk_head">
                    	<p class="os_zhuangtai_kk_head_text fl">订单已在配送途中</p>
                        <p class="os_zhuangtai_kk_head_time fr"><?php echo ($row['delivery']); ?></p>
                    </div>
                    <p class="os_zhuangtai_kk_zt">配送中</p>
                    <p class="os_zhuangtai_kk_jj"></p>
                </div>                
                                
                <?php elseif($row['status'] == 3): ?>
                
                   <div class="os_zhuangtai_kk fr">
                	<div class="os_zhuangtai_kk_head">
                    	<p class="os_zhuangtai_kk_head_text fl">订单已提交成功</p>
                        <p class="os_zhuangtai_kk_head_time fr"><?php echo ($row['add_time']); ?></p>
                    </div>
                    <p class="os_zhuangtai_kk_zt">商品准备中</p>
                    <p class="os_zhuangtai_kk_jj"></p>
                </div>             
                 <div class="os_zhuangtai_kk fr">
                	<div class="os_zhuangtai_kk_head">
                    	<p class="os_zhuangtai_kk_head_text fl">订单已在配送途中</p>
                        <p class="os_zhuangtai_kk_head_time fr"><?php echo ($row['delivery']); ?></p>
                    </div>
                    <p class="os_zhuangtai_kk_zt">配送中</p>
                    <p class="os_zhuangtai_kk_jj"></p>
                </div>                       
                 <div class="os_zhuangtai_kk fr">
                	<div class="os_zhuangtai_kk_head">
                    	<p class="os_zhuangtai_kk_head_text fl">订单已配送成功</p>
                        <p class="os_zhuangtai_kk_head_time fr"><?php echo ($row['shipments']); ?></p>
                    </div>
                    <p class="os_zhuangtai_kk_zt">配送成功</p>
                    <p class="os_zhuangtai_kk_jj"></p>
                </div>               
                                
                                
                                <?php elseif($row['status'] == 4): ?>
                                 <div class="os_zhuangtai_kk fr">
                	<div class="os_zhuangtai_kk_head">
                    	<p class="os_zhuangtai_kk_head_text fl">订单已提交成功</p>
                        <p class="os_zhuangtai_kk_head_time fr"><?php echo ($row['add_time']); ?></p>
                    </div>
                    <p class="os_zhuangtai_kk_zt">商品准备中</p>
                    <p class="os_zhuangtai_kk_jj"></p>
                </div>             
                 <div class="os_zhuangtai_kk fr">
                	<div class="os_zhuangtai_kk_head">
                    	<p class="os_zhuangtai_kk_head_text fl">订单已在配送途中</p>
                        <p class="os_zhuangtai_kk_head_time fr"><?php echo ($row['delivery']); ?></p>
                    </div>
                    <p class="os_zhuangtai_kk_zt">配送中</p>
                    <p class="os_zhuangtai_kk_jj"></p>
                </div>                       
                 <div class="os_zhuangtai_kk fr">
                	<div class="os_zhuangtai_kk_head">
                    	<p class="os_zhuangtai_kk_head_text fl">订单已配送成功</p>
                        <p class="os_zhuangtai_kk_head_time fr"><?php echo ($row['shipments']); ?></p>
                    </div>
                    <p class="os_zhuangtai_kk_zt">配送成功</p>
                    <p class="os_zhuangtai_kk_jj"></p>
                </div>               
                        <div class="os_zhuangtai_kk fr">
                	<div class="os_zhuangtai_kk_head">
                    	<p class="os_zhuangtai_kk_head_text fl">订单已完成</p>
                        <p class="os_zhuangtai_kk_head_time fr"><?php echo ($row['finish']); ?></p>
                    </div>
                    <p class="os_zhuangtai_kk_zt">配送完成</p>
                    <p class="os_zhuangtai_kk_jj"></p>
                </div>        
                                <?php else: endif; endforeach; endif; ?>
                  

                   

                </div>
            </div>


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
    </script>