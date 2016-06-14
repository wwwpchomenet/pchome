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
        <!-- 头部 -->
        <div class="se_head">
            <div class="se_head_input">
                <div class="se_head_input_tu fl"></div>
                <div class="se_head_input_input fl"><input type="text" /></div>
            </div>
        </div>
        <!--清单-->
        <div class="ord_top">
            <!--清单列表-->
            <?php if(is_array($goodsList)): foreach($goodsList as $key=>$goodsList): ?><div class="ord_qingdan">
                    <div class="ord_con">
                        <div class="ord_qingdan_tu fl"><img src="http://www.wap.com/Uploads/<?php echo $goodsList['logo'];?>" /> </div>
                        <div class="ord_qingdan_text fl">
                            <input type="hidden" class="goodId" value="<?php echo $goodsList['id'];?>">
                            <p class="ord_qingdan_name_name fl"><?php echo $goodsList['name'];?></p>
                            <p class="ord_qingdan_name_jiage js_danjia fr"><?php echo $goodsList['market_price'.session('MEMBER_INFO')['rank']];?><span>元/件</span></p>
                            <div class="se_lish_text_shuliang ma_matop30 fl js_num">
                                <span class="sy_minus fl" data="<?php echo $goodsList['id'];?>" id="sy_minus_gid1">-</span>
                                <input type="text" class="sy_num fl" value="<?php echo $goodsList['num'];?>">
                                <span class="sy_plus fl" data="<?php echo $goodsList['id'];?>" id="sy_plus_gid1">+</span>
                            </div>
                            <p style="display:none;" class="js_bb">需支付￥<?php echo $goodsList['market_price'.session('MEMBER_INFO')['rank']]*$goodsList['num'];?>元</p>
                            <a class="ord_qingdan_sc fr" href="javascript:;" data="<?php echo $goodsList['id'];?>">删除</a>
                        </div>
                    </div>
                </div><?php endforeach; endif; ?>
            <!-- 结账-->
            <div class="ord_zongji">
                <div class="ord_zongji_con">
                    <p class="ord_zongji_con_float fl">订单总计</p>
                    <p class="ord_zongji_con_right js_heji fl">￥0元</p>
                </div>
            </div>
        </div>
        <!-- end -->
        <!-- 红色区域 -->
        <a class="cp_dianjick" href="<?php echo U('index.php/admin/GoodsList/getListing');?>">立即结算</a>
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

       <script type="text/javascript" src="http://www.wap.com/iphone/Public/ext/layer/layer.js"></script>
    <script type="text/javascript">

        $('.in_footer_lish_tu2').css({
            'background-position':'-40px 0px',
        });
        $('.in_footer_lish_tu1').css({
            'background-position':'0px 0px',
        });
        $('.in_footer_lish_tu4').css({
            'background-position':'-105px 0px',
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
            /**
             *删除清单商品
             */
            $('.ord_qingdan_sc').on('click',function(){
                var node = $(this);
                var gallery_id = node.attr('data');
                var flag = true;//是否要删除div
                if(gallery_id){
                    var url = '<?php echo U("index.php/admin/GoodsList/delete");?>';
                    var data = {id:gallery_id};
                    $.get(url,data,function(response){
                        node.parent().parent().parent().remove();
                        heji();
                    });
                }
            });
            heji();
            /**
             *计算总价格
             *
             */
            function heji(){
                var pl = $(".js_heji:last");
                var reg = /(.*[\￥]\s*)([\+\d\.]+)(\s*元)/g;
                var sum = 0;
                $(".js_num").next(".js_bb").each(function (i, dom)
                {
                    sum += parseFloat ($(this).text().replace(reg, "$2"));
                });
                pl.text(pl.text().replace(reg, "$1" + sum.toFixed(2) + "$3"));
            }
            /**
             * 获取用户输入的商品数量
             */
            $('.sy_num').on('change',function(){
                var reg = new RegExp("^[0-9]*$");
                var obj = $(this).val();
                if(reg.test(obj)){
                var goodId=$(this).next().attr('data');
                $.post('<?php echo U("index.php/admin/GoodsList/save");?>',{'num':$(this).val(),'goods_id':goodId});
                heji();
                }else{
//                    alert('请输入数字');
                     layer.msg('请输入数字');
                }
            });
            /**
             * 点击+号添加数据库商品数量
             */
            $('.sy_plus').on('click',function(){
                var num=parseInt($(this).prev('.sy_num').val())+1;
                var goodId=$(this).attr('data');
                $.post('<?php echo U("index.php/admin/GoodsList/save");?>',{'num':num,'goods_id':goodId});
            });
            /**
             * 点击+号减少数据库商品数量
             */
            $('.sy_minus').on('click',function(){
                var num=parseInt($(this).next('.sy_num').val())-1;
                var goodId=$(this).attr('data');
                $.post('<?php echo U("index.php/admin/GoodsList/save");?>',{'num':num,'goods_id':goodId});
            });
        });
    </script>