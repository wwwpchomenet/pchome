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
    	<div class="se_head_input_input fl"><input type="text" name="name" id="search" value="<?php echo $_GET['name'];?>"/>

        </div>
    </div>
  </div>
  <!--搜索结果-->
  <div class="se_con">
 	<!-- 产品列表 -->
      <?php if(($goodsAll == '')): ?><h1 style="color: #c2ccd1" align="center">没有找到您要查找的商品</h1><?php endif; ?>
      <?php if(is_array($goodsAll)): foreach($goodsAll as $key=>$goodsAll): ?><div class="pro_lish">
              <div class="pro_lish_tu fl">  <img src="http://www.wap.com/Uploads/<?php echo $goodsAll['logo'];?>" /></div>
              <div class="pro_lish_text fl">
                  <input type="hidden" name="id" value="<?php echo $goodsAll['id'];?>" />
                  <p class="pro_lish_text_name"><?php echo $goodsAll['name'];?></p>
                  <p class="pro_lish_text_xq">产地 ：<?php echo $goodsAll['origin']?$goodsAll['origin']:'未知';?>    规格：<?php echo $goodsAll['norms'];?>件</p>
                  <p class="pro_lish_text_xq"><?php echo $goodsAll['intro'];?></p>
                  <p class="pro_lish_text_xq"><?php echo $goodsAll['norintro'];?>起订</p>
                  <?php if((session('MEMBER_INFO') != '')): ?><p class="pro_lish_text_jiage fr js_danjia"><?php echo $goodsAll['market_price'];?>元<span>/件</span> </p><?php endif; ?>
                  <div class="se_lish_text_shuliang fl js_num"> <span class="sy_minus fl" id="sy_minus_gid1">-</span>
                      <input type="text" class="sy_num fl" value="0">
                      <span class="sy_plus fl" id="sy_plus_gid1">+</span>
                  </div>
                  <p style="display:none;" class="js_bb">需支付￥0元</p>
              </div>
          </div><?php endforeach; endif; ?>
    <!-- end -->
   </div>
  <!-- end -->
  <!-- 红色区域 -->
    <?php if((session('MEMBER_INFO') != '')): ?><div class="cp_dianjick">
            <p class="pro_jiage  fl js_heji">合计金额&nbsp;&nbsp;￥0元</p>
            <a class="pro_qingdan fl" href="javascirpt:;">加入清单</a>
        </div>
        <?php else: ?>
        <a class="is_cp_dianjick" href="<?php echo U('index.php/Admin/member/login');?>">点击查看商品价格</a><?php endif; ?>
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

    <script type="text/javascript">
        $(document).keydown(function(event){
            var search=$('#search').val();
            if(event.keyCode==13){
                window.location.href='<?php echo U("index.php/admin/Goods/showAll") ?>'+'?name='+search;
            }
        });
        /**
         * 点击按钮 添加清单列表
         */
        $('.pro_qingdan').live('click',function(){
            var data={};
            $('.pro_lish').each(function(k,v){
                if($(this).children().children().children('input').val()>0){
                    data[k]={'member_id':'<?php echo session("MEMBER_INFO")["id"] ?>','goods_id':$(this).children().children('input').val(),'num':$(this).children().children().children('input').val()};
                }
            });
            $.post("<?php echo U('index.php/Admin/GoodsList/add');?>",data,function(da){
                if(da){
                    alert('添加成功');
                }else {
                    alert('请选择数量');
                }
            });
        });
        $('.in_footer_lish_tu2').css({
            'background-position':'-40px 0px',
        });
    </script>