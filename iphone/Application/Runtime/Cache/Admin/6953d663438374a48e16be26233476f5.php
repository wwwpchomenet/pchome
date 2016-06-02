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
  <!-- 头部 -->
  <div class="se_head">
    <div class="se_head_input">
      <div class="se_head_input_tu fl"></div>
      <div class="se_head_input_input fl">
        <input type="text" id="search"/>
      </div>
    </div>
  </div>
<!--  一级分类-->
  <div class="se_cpname">
    <ul >
         <?php if(is_array($goodscategory)): foreach($goodscategory as $key=>$val): if(($goodscategory['parent_id'] == 0)): ?><li class="category <?php if(($val['id'] == 1)): ?>se_cpname_on<?php endif; ?>" id="<?php echo ($row["id"]); ?>"><a href="javascript:void(0)"><?php echo ($val["name"]); ?></a></li><?php endif; endforeach; endif; ?>
    </ul>
  </div>
       
  <!--产品中部-->
<div id="pro_left">
    <div class="pro_left fl pro_left_lish1" >
    <?php if(is_array($goodscategory)): foreach($goodscategory as $k=>$v): if(($v['parent_id'] == 1)): ?><div class="pro_left_lish <?php if(($k == 1)): ?>pro_on<?php endif; ?>"> <a href="javascript:;" data="<?php echo $v['id'];?>"><?php echo $v['name'];?> </a> </div><?php endif; endforeach; endif; ?>
</div>
    <div class="pro_left fl">
        <?php if(is_array($goodscategory)): foreach($goodscategory as $k=>$v): if(($v['parent_id'] == 2)): ?><div class="pro_left_lish "> <a href="javascript:;" data="<?php echo $v['id'];?>"><?php echo $v['name'];?> </a> </div><?php endif; endforeach; endif; ?>
    </div>
    <div class="pro_left fl">
        <?php if(is_array($goodscategory)): foreach($goodscategory as $k=>$v): if(($v['parent_id'] == 3)): ?><div class="pro_left_lish "> <a href="javascript:;" data="<?php echo $v['id'];?>"><?php echo $v['name'];?> </a> </div><?php endif; endforeach; endif; ?>
    </div>
    <div class="pro_left fl">
        <?php if(is_array($goodscategory)): foreach($goodscategory as $k=>$v): if(($v['parent_id'] == 4)): ?><div class="pro_left_lish "> <a href="javascript:;" data="<?php echo $v['id'];?>"><?php echo $v['name'];?> </a> </div><?php endif; endforeach; endif; ?>
    </div>
</div>
  <div class="pro_right fr"> 
    <!--产品列表-->
  </div>
  <!-- end --> 
  <!-- 红色区域 -->
    <?php if((session('MEMBER_INFO') != '')): ?><div class="cp_dianjick">
            <p class="pro_jiage  fl js_heji">合计金额&nbsp;&nbsp;￥0元</p>
            <a class="pro_qingdan fl" href="javascript:;">加入清单</a>
        </div>
        <?php else: ?>
        <a class="is_cp_dianjick" href="<?php echo U('index.php/Admin/member/login');?>">点击查看商品价格</a><?php endif; ?>
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
last
        <script type="text/javascript">
            $(function(){
                $('.pro_left_lish1').css('display', 'block').siblings().css('display', 'none');
                $('.pro_left_lish').children().first().addClass('pro_on').siblings().removeClass('pro_on')
               $('.se_cpname').children().children().on('click',function(){
                   $(this).first().attr('class','se_cpname_on').siblings().removeClass('se_cpname_on');
                   var index=$(this).index();
                   $('#pro_left').children().each(function(k,v){
                       if(index==$(this).index()){
                           var id=$(this).children().children().attr('data');
                           $(this).children().addClass('pro_on').siblings().removeClass('pro_on')
                           $.getJSON("<?php echo U('index.php/Admin/Goods/goodsList');?>",{id:id},function(data){
                               fordata(data);
                           });
                           $(this).css( 'display', 'block').siblings().css('display', 'none')
                       }
                   });
               });
                $('.pro_left_lish').on('click',function(){
                    $(this).addClass('pro_on').siblings().removeClass('pro_on')
                   var id=$(this).children().attr('id');
                    $.getJSON("<?php echo U('index.php/Admin/Goods/goodsList');?>",{id:id},function(data){
                        fordata(data);
                    });
                });
            });
            $.getJSON("<?php echo U('index.php/Admin/Goods/goodsList');?>",{id:8},function(data){
                fordata(data);
            });
            function fordata(data){
                $('.pro_right').children().remove();
                for(var i=0;i<data.length;i++){
                    var div='  <div class="pro_lish">';
                    div+='<input type="hidden" name="id" value="'+data[i]["id"]+'" />';
                    div+='  <div class="pro_lish_tu fl"> <img src="http://www.wap.com/Uploads/'+data[i]["logo"]+'"> </div>';
                    div+='  <div class="pro_lish_text fl">';
                    div+='    <p class="pro_lish_text_name">'+data[i]["name"]+'</p>';
                    div+='   <p class="pro_lish_text_xq">产地 ：'+(data[i]["origin"]?data[i]["origin"]:'未知 ')+'    规格:'+data[i]["norintro"]+'</p>';
                    div+='   <p class="pro_lish_text_xq">'+data[i]["intro"]+'</p>';
                    div+='   <p class="pro_lish_text_xq">5件起订</p>';
                    <?php if((session('MEMBER_INFO') != '')): ?>div+='  <p class="pro_lish_text_jiage fr js_danjia">'+data[i]["market_price"]+'元/件</p>';<?php endif; ?>
                    div+='  <div class="se_lish_text_shuliang fl js_num"> <span class="sy_minus fl" id="sy_minus_gid1">-</span>';
                    div+='       <input type="text" name="num" class="sy_num fl" value="0">';
                    div+='          <span class="sy_plus fl" id="sy_plus_gid1">+</span>';
                    div+='   </div>';
                    div+='     <p style="display:none;" class="js_bb">需支付￥0元</p>';
                    div+='  </div></div>';
                    $('.pro_right').append(div);
                }
            }
            /**
             * 点击按钮 添加清单列表
             */
            $('.pro_qingdan').live('click',function(){
                var data={};
                $('.pro_lish').each(function(k,v){
                    if($(this).children().children().children('input').val()>0){
                        data[k]={'member_id':'<?php echo session("MEMBER_INFO")["id"] ?>','goods_id':$(this).children('input').val(),'num':$(this).children().children().children('input').val()};
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
            $(document).keydown(function(event){
                var search=$('#search').val();
                if(event.keyCode==13){
                    window.location.href='<?php echo U("index.php/admin/Goods/showAll") ?>'+'?name='+search;
                }
            });
        </script>