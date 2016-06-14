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
        <div class="ao_con">
            <?php if(is_array($rows)): foreach($rows as $key=>$row): ?><div class="ao_lish">
                      
                    <div class="ao_lish_tu fl"><img src="http://www.wap.com/Uploads/<?php echo ($row['logo']); ?>" /></div>
                    <div class="ao_lish_text fl">

                        <div class="ao_lish_text_head">
                            <p class="ao_lish_text_ziti fl"><?php echo ($row['good_name']); ?>等<?php echo ($row['count']); ?>个商品</p>
                            <p class="ao_lish_text_fukuan clo_ff9 fr">
                            <?php if($row['status'] == 1 ): ?>待发货
                                <?php elseif($row['status'] == 2): ?>
                                配送中...
                                <?php elseif($row['status'] == 3): ?>
                                <div>
                                <a  class="ao_lish_text_jiage_aniu ao_bj1 fr affirm" >确认收货</a>
                                 <input type='hidden' class='member_id' value="<?php echo ($row['member_id']); ?>">
                                  <input type='hidden' class='order_num' value="<?php echo ($row['order_num']); ?>">   
                                </div>
                                 <?php elseif($row['status'] == 4): ?>
                                 完成
                                <?php else: ?> 
                                <a href="" class="ao_lish_text_jiage_aniu ao_bj2 fr">立即付款</a><?php endif; ?>
                            </p>
                        </div>
                        <div class="ao_lish_text_jiage">
                            <p class="ao_lish_text_jiage_zi fl">￥<?php echo ($row['countmeny']); ?></p>
                        </div>
                        <div class="ao_lish_text_ztai">
                            <div class="ao_lish_text_ztai_time fl">
                                <p><?php echo ($row['add_time']); ?></p>
                                <p><?php echo ($row['delivery_name']); ?></p>
                            </div>

                           
                            <a href="<?php echo U('index.php/Admin/OrderInfo/showTwo',array('order_num'=>$row['order_num']));?>" class="ao_lish_text_jiage_aniu fr">订单状态</a>
                        </div>

                    </div>                
                </div><?php endforeach; endif; ?>   

        </div>


        <!-- footer -->
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
    <script type="text/javascript" charset="utf-8">
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
        });
        //--------------------------------------------------
        $('.affirm').live('click',function () {
          
            //会员id
            var member_id = $($(this).siblings('input')[0]).val();
            //订单编号
            var order_num = $($(this).siblings('input')[1]).val();
            //当前时间的时间戳
            var finish = new Date().getTime();
            console.debug(finish);
            layer.confirm('您是否确认收货？', {
                btn: ['确定', '取消'] //按钮
            }, function () {
                $.post("<?php echo U('index.php/Admin/OrderInfo/notarize');?>",{'finish':finish,'member_id':member_id,'order_num':order_num},function(data){  
                  if(data['status']==0){
                      layer.msg('确定收货失败');
                  }else{
                       layer.msg(data);
                       location.href="<?php echo U('index.php/Admin/OrderInfo/setlist');?>";
                  }
                });
            }, function () {
                layer.msg('取消确定收货');
            });
        });
    </script>