<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="ch" manifest="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<meta name="apple-touch-fullscreen" content="YES">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="pragram" content="no-cache">
<link rel="stylesheet" type="text/css" href="http://www.wap.com/iphone/Public/Images/main.css">
<link rel="stylesheet" type="text/css" href="http://www.wap.com/iphone/Public/Images/endpic.css">
<link rel="stylesheet" type="text/css" href="http://www.wap.com/iphone/Public/Css/styles.css">
<script type="text/javascript" src="http://www.wap.com/iphone/Public/Js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://www.wap.com/iphone/Public/ext/layer/layer.js"></script>
<script type="text/javascript" src="http://www.wap.com/iphone/Public/Images/offline.js"></script><!--移动端版本兼容 -->
<script type="text/javascript">
    var mengvalue = -1;
    //if(mengvalue<0){mengvalue=0;}
    var phoneWidth = parseInt(window.screen.width);
    var phoneScale = phoneWidth / 640;

    var ua = navigator.userAgent;
    if (/Android (\d+\.\d+)/.test(ua)) {
        var version = parseFloat(RegExp.$1);
        // andriod 2.3
        if (version > 2.3) {
            document.write('<meta name="viewport" content="width=640, minimum-scale = ' + phoneScale + ', maximum-scale = ' + phoneScale + ', target-densitydpi=device-dpi">');
            // andriod 2.3以上
        } else {
            document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
        }
        // 其他系统
    } else {
        document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
    }
</script>

<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
<!--移动端版本兼容 end -->
</head>
<body class="s-bg-ddd pc no-3d mobile iphone perspective yes-3d" style="-webkit-user-select: none;">
    <section class="p-ct transformNode-2d transformNode-3d" style="height: 1139px;"><!-- 旋转反面 -->
    <section class="u-arrow"><p class="css_sprite01"></p></section>
       <div class="translate-back" style="height: 1139px;"> 
       	<!--第一页-->
        <div class="m-page m-fengye z-animate" data-page-type="info_pic3" data-statics="info_pic3" data-translate="" style="">
             <div class="page-con lazy-finish" data-src="http://www.wap.com/iphone/Public/Images/n_5417dc9238d0d.jpg" data-position="50% 50%" data-size="cover" style="height: 1141px; background-image: url(&quot;http://www.wap.com/iphone/Public/Images/1.jpg&quot;); background-size: cover; background-position: 50% 50%;">
                <div class="wap_head">
                	<div class="wap_logo"><img src="http://www.wap.com/iphone/Public/Images/logo.png" /></div>
                    
                    <div class="nav">
                      <button class="btn-nav"> <span class="icon-bar top"></span> <span class="icon-bar middle"></span> <span class="icon-bar bottom"></span> </button>
                      <div class="btn-nav-bg"></div>
                    </div>
                    <div class="nav-content hideNav hidden">
                      <ul class="nav-list">
                        <li class="nav-item"><a href="" class="item-anchor">首页</a></li>
                        <li class="nav-item"><a href="" class="item-anchor">国际供应链介绍</a></li>
                        <li class="nav-item"><a href="" class="item-anchor">分公司的拓展</a></li>
                        <li class="nav-item"><a href="" class="item-anchor">主营产品展示</a></li>
                        <li class="nav-item"><a href="" class="item-anchor">联营商 /代理商招募</a></li>
                        <li class="nav-item"><a href="" class="item-anchor">合作品牌展示</a></li>
                        <li class="nav-item"><a href="" class="item-anchor">联系我们</a></li>
                      </ul>
                    </div>
                    <script>
                        $(window).load(function () {
                            $('.btn-nav').on('click tap', function () {
                                $('.nav-content').toggleClass('showNav hideNav').removeClass('hidden');
                                $(this).toggleClass('animated');
                            });
                        });
                    </script> 
                </div>
             	<div class="wap_box">
                	<img src="http://www.wap.com/iphone/Public/Images/001.png" />
                </div>
             	<a href="<?php echo U('index.php/admin/Banner/index');?>" class="wap_ljgd">
                	<img src="http://www.wap.com/iphone/Public/Images/lijgd.png" />
                </a>
             </div>
        </div>
        <!--第二页-->
        <div class="m-page m-bigTxt z-animate action f-hide" data-page-type="bigTxt" data-statics="info_list" data-translate="">
            <div class="page-con j-txtWrap lazy-finish" data-src="http://www.wap.com/iphone/Public/Images/n_5417dc9645d0c.jpg" data-position="50% 50%" data-size="cover" style="height: 1141px; background:#fff">
            	<div class="wap_two_top">
                	<div class="wap_two_top_33 fl">
                    	<div class="wap_two_top_tu">
                        	<img src="http://www.wap.com/iphone/Public/Images/002.png" />
                        </div>
                        <p class="wap_two_top_shuzi">30,000+</p>
                        <p class="wap_two_top_xian"></p>
                        <p class="wap_two_top_zi">入住商户</p>
                    </div>
                    <div class="wap_two_top_33 fl">
                    	<div class="wap_two_top_tu">
                        	<img src="http://www.wap.com/iphone/Public/Images/003.png" />
                        </div>
                        <p class="wap_two_top_shuzi">900,000+</p>
                        <p class="wap_two_top_xian"></p>
                        <p class="wap_two_top_zi">近三个月为商户配送次数</p>
                    </div>
                    <div class="wap_two_top_33 fl">
                    	<div class="wap_two_top_tu">
                        	<img src="http://www.wap.com/iphone/Public/Images/004.png" />
                        </div>
                        <p class="wap_two_top_shuzi">36%+</p>
                        <p class="wap_two_top_xian"></p>
                        <p class="wap_two_top_zi">累计为商户降低采购成本</p>
                    </div>
                </div>
                
                <div class="wap_two_con">
                	<img src="http://www.wap.com/iphone/Public/Images/005.png" />
                </div>
                
                <div class="wap_two_zi">
                	<div class="wap_two_zi_head">
                    	<p class="wap_two_zi_head_shu fl"></p>
                        <p class="wap_two_zi_head_head fl">关于重庆国际火锅供应链</p>
                    </div>
                    <div class="wap_two_zi_head_text">
                    2015年底，顺应火锅行业近几年在中国良好的发展趋势，国际火锅供应链公司入驻重庆，在重庆建立了办事处。组织致力于通过业界管理经验分享、科学培训以促进火锅行业在中国的发展水平，实现企业管理的优化。
                    </div>
                    <div class="wap_two_zi_head_text">
我们致力于打造与国际贸易市场、国际消费市场接轨的火锅产业链，为加盟产业链的客户创造更大的经济价值，同时我们集团和国内众多大型火锅知名品牌为战略合作伙伴。
                    </div>
					<a href="" class="wap_two_anniu"><img src="http://www.wap.com/iphone/Public/Images/006.png" /></a>                    
                </div>
                
            </div>
        </div>
        <!--第三页-->
        <div class="m-page m-bigTxt z-animate f-hide" data-page-type="bigTxt" data-statics="info_list" data-translate="">
            <div class="page-con j-txtWrap lazy-finish" data-src="http://www.wap.com/iphone/Public/Images/n_5417dc993abcb.jpg" data-position="50% 50%" data-size="cover" style="height: 1141px; background-image: url(&quot;http://www.wap.com/iphone/Public/Images/2.jpg&quot;); background-size: cover; background-position: 50% 50%;">
            	<div class="wap_san">
                   分公司的拓展
                </div>

                <?php if(is_array($details)): foreach($details as $key=>$details): ?><div class="wap_san_he300 wap_san_texiao1"><!--wap_san_bjs-->
                    <p class="wap_san_tubiao"></p>
                    <p class="wap_san_head"><?php echo ($details["name"]); ?></p>
                    <p class="wap_san_text">地址:<?php echo ($details["address"]); ?></p>
                    <p class="wap_san_text">电话:<?php echo ($details["tel"]); ?></p>
                </div><?php endforeach; endif; ?>
            </div>
         </div>
        <!--第四页-->
        <div class="m-page m-bigTxt z-animate f-hide" data-page-type="bigTxt" data-statics="info_list" data-translate="">
            <div class="page-con j-txtWrap lazy-finish" data-src="http://www.wap.com/iphone/Public/Images/n_5417dc993abcb.jpg" data-position="50% 50%" data-size="cover" style="height: 1141px; background:#fff;">
            	<div class="wap_four_head"> 主营产品展示</div>
                <div class="wap_four_head_tu"><img src="http://www.wap.com/iphone/Public/Images/007.png"/></div>
                <div class="wap_four_head_fenlei">

                    <?php foreach($rows['goodscategory'] as $key=>$val){ ?>
                        <?php if(($key == 0)): ?><a href="javascript:void(0);" class="fl wap_four_on" id="goods0">全部</a>
                                 <?php else: ?>
                            <a href="javascript:void(0);" class="fl" id="goods<?php echo $key;?>"><?php echo $val;?></a><?php endif; ?>
                    <?php } ?>
                </div>
                <div class="wap_four_con">
                	<ul id="goodsCategory">
                    </ul>
                </div>
            </div>
         </div>
        <!--第五页-->
        <div class="m-page m-bigTxt z-animate f-hide" data-page-type="bigTxt" data-statics="info_list" data-translate="">
            <div class="page-con j-txtWrap lazy-finish" data-src="http://www.wap.com/iphone/Public/Images/n_5417dc993abcb.jpg" data-position="50% 50%" data-size="cover" style="height: 1141px; background:#fff;">
            	<div class="wap_four_head">供应链商城</div>
                <div class="wap_four_head_tu"><img src="http://www.wap.com/iphone/Public/Images/008.png"/></div>
                <div class="wap_wu_tu"><img src="http://www.wap.com/iphone/Public/Images/009.png"/></div>
               	<p class="wap_wu_head">重庆国际火锅供应链商城</p>
                <p class="wap_wu_zi">主要经营餐饮管理；餐饮项目开发；销售：水果（国家在专项管理规定的产品除外）、禽畜产品、饲料、冻冻设备、保温材料、橡胶及其制品、农副产品、日用百货、针纺织品、五金交电、家用电器、机电设备及机械；货物及技术进出口（不含国家禁止或限制进出口项目）；水产品（不含药品、食品以及其他需经许可或审批的项目）、肉类的配送及销售；非食用冰制造及销售。</p>
                <a href="" class="wap_wu_annniu"><img src="http://www.wap.com/iphone/Public/Images/010.png" /></a>
                
            </div>
         </div>
        <!--第六页-->
        <div class="m-page m-bigTxt z-animate f-hide" data-page-type="bigTxt" data-statics="info_list" data-translate="">
            <div class="page-con j-txtWrap lazy-finish" data-src="http://www.wap.com/iphone/Public/Images/n_5417dc993abcb.jpg" data-position="50% 50%" data-size="cover" style="height: 1141px; background:#fff;">
            	<div class="wap_four_head">合作品牌展示</div>
                <div class="wap_four_head_tu"><img src="http://www.wap.com/iphone/Public/Images/011.png"/></div>
                <div class="wap_liu_lish">
                	<ul>
                        <?php if(is_array($rows["pics"])): foreach($rows["pics"] as $key=>$pics): ?><li class="fl"><img src="http://www.wap.com/Uploads/<?php echo $pics;?>" /></li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
         </div>
        <!--第七页-->
        <div class="m-page m-bigTxt z-animate f-hide" data-page-type="bigTxt" data-statics="info_list" data-translate="">
             <div class="page-con lazy-finish" data-src="http://www.wap.com/iphone/Public/Images/n_5417dc9238d0d.jpg" data-position="50% 50%" data-size="cover" style="height: 1141px; background-image: url(&quot;http://www.wap.com/iphone/Public/Images/3.jpg&quot;); background-size: cover; background-position: 50% 50%;">
                	<div class="wap_box">
                	<img src="http://www.wap.com/iphone/Public/Images/012.png" />
                </div>
             	<a href="" class="wap_qi_anniu">
                	<img src="http://www.wap.com/iphone/Public/Images/006.png" />
                </a>
             </div>
        </div>
        <!--第八页-->
        <div class="m-page m-bigTxt z-animate f-hide" data-page-type="bigTxt" data-statics="info_list" data-translate="">
             <div class="page-con lazy-finish" data-src="http://www.wap.com/iphone/Public/Images/n_5417dc9238d0d.jpg" data-position="50% 50%" data-size="cover" style="height: 1141px; background-image: url(&quot;http://www.wap.com/iphone/Public/Images/6.jpg&quot;); background-size: cover; background-position: 50% 50%;">
                 <form action="<?php echo U('index.php/Admin/Agent/add');?>" method="post" name="form1">
                    <div class="wap_four_head wap_color_fff">联系我们</div>
                    <div class="wap_four_head_tu"><img src="http://www.wap.com/iphone/Public/Images/013.png"/></div>
                    <div class="wap_ba_input wap_ba_texiao1">
                        <p class="wap_ba_input_name fl">名字</p>
                        <p class="wap_ba_input_input fl"><input type="text" name="name" /></p>
                    </div>
                    <div class="wap_ba_input wap_ba_texiao2">
                        <p class="wap_ba_input_name fl">邮箱</p>
                        <p class="wap_ba_input_input fl"><input type="text" name="email" /></p>
                    </div>
                    <div class="wap_ba_input wap_ba_texiao3">
                        <p class="wap_ba_input_name fl">电话</p>
                        <p class="wap_ba_input_input fl"><input type="text" name="tel" /></p>
                    </div>
                    <div class="wap_ba_textarea_kk wap_ba_texiao4">
                        <p class="wap_ba_textarea_kk_text">留言板</p>
                        <div class="wap_ba_textarea">
                            <p class="wap_ba_input_textarea"><textarea name="intro"></textarea></p>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="wap_ba_anniu" onclick="sub()"><img src="http://www.wap.com/iphone/Public/Images/014.png" /></a>
                 </form>
             </div>
        </div>
         
      </div>
    </section>
    <section class="u-pageLoading"><img src="http://www.wap.com/iphone/Public/Images/load.gif" alt="loading"></section>
    <script src="http://www.wap.com/iphone/Public/Images/init.mix.js" type="text/javascript" charset="utf-8"></script> 
    <script src="http://www.wap.com/iphone/Public/Images/coffee.js" type="text/javascript" charset="utf-8"></script> 
    <script src="http://www.wap.com/iphone/Public/Images/99_main.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        var id=0;
        function sub(){
            document.form1.submit();
            layer.msg('提交成功');
        }
        $.getJSON("<?php echo U('index.php/Admin/Index/goodsCateGoryShow');?>",{ 'id': 0},function(data){
            $('#goodsCategory').children().remove();
            for(var i=0;i<data.length;i++){
                var labels='<li class="wap_san_texiao1">'+'<a href="javascript:void(0);" class="wap_four_con_tu"><img src=http://www.wap.com/Uploads/'+data[i]['logo']+' />'+'<div class="wap_four_con_wrapss">'+data[i]['name']+'</div> </a> </li>';
                $('#goodsCategory').append(labels);
            }
        },'json');
        $('.in_footer_lish_tu2').css({
            'background-position':'40px 0px',
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
           //改变当前点击标签的背景色
           $('.wap_four_head_fenlei').children().on('click',function(){
             $(this).attr('class','wap_four_on fl').siblings().removeClass('wap_four_on');
               //进入首页默认展示商品信息
              var goodsid=$(this).attr('id').substr(5);
                console.debug(id);
               $.getJSON("<?php echo U('index.php/Admin/Index/goodsCateGoryShow');?>",{ 'id': goodsid},function(data){
                   $('#goodsCategory').children().remove();
                   for(var i=0;i<data.length;i++){
                       var labels='<li class="wap_san_texiao1">'+'<a href="javascript:void(0);" class="wap_four_con_tu"><img src=http://www.wap.com/Uploads/'+data[i]['logo']+' />'+'<div class="wap_four_con_wrapss">'+data[i]['name']+'</div> </a> </li>';
                       $('#goodsCategory').append(labels);
                   }
               },'json');
           });
       });
    </script>
</body>
</html>