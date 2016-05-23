<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>国际火锅供应链</title>
    <link rel="stylesheet" type="text/css" href="http://www.wap.com/pcHome/Public/Css/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="http://www.wap.com/pcHome/Public/Css/style.css" />
    <script type="text/javascript" src="http://www.wap.com/pcHome/Public/Js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="http://www.wap.com/pcHome/Public/Js/jquery.fullPage.min.js"></script>
    <script type="text/javascript" src="http://www.wap.com/pcHome/Public/Js/bigfoucs.js"></script>
<script>
    $(function(){
        $('.con').fullpage({
            navigation: true,
            anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8'],
            menu: '.menus',
            navigationTooltips: ['首页','国际供应链介绍','分公司的拓展','主营产品展示','供应链商场','联营商 /代理商招募','主营产品展示','联系我们'],
            verticalCentered:false,

        });

    });
	window.onload = function() {
		var oDiv = document.getElementById("tab");
		var oLi = oDiv.getElementsByTagName("div")[0].getElementsByTagName("li");
		var aCon = oDiv.getElementsByTagName("div")[1].getElementsByTagName("div");
		var timer = null;
		for (var i = 0; i < oLi.length; i++) {
			oLi[i].index = i;
			oLi[i].onclick = function() {
				show(this.index);
			}
		}
		function show(a) {
			index = a;
			var alpha = 0;
			for (var j = 0; j < oLi.length; j++) {
				oLi[j].className = "";
				aCon[j].className = "";
				aCon[j].style.opacity = 0;
				aCon[j].style.filter = "alpha(opacity=0)";
			}
			oLi[index].className = "cur";
			clearInterval(timer);
			timer = setInterval(function() {
				alpha += 2;
				alpha > 100 && (alpha = 100);
				aCon[index].style.opacity = alpha / 100;
				aCon[index].style.filter = "alpha(opacity=" + alpha + ")";
				alpha == 100 && clearInterval(timer);
			},
			5)
		}
	}
	$(document).ready(function(){

		$('.artist li').each(function(){
			
			$(this).find('.cover').css('top', -$(this).height());
			
			$(this).hover(function(){
				$(this).find('.cover').animate({
					'top': '0'
				},300);
			},function(){
				$(this).find('.cover').animate({
					'top':$(this).height()
				},{
					duration: 300,
					complete:function(){
						$(this).css('top', -$(this).parent('li').height())
					}
				});
			});
			
		});
	});
</script>

</head>
<body>
<!-- 头部导航开始 -->
<header class="hd">
  <div class="innerss"> <a class="logo fl"><img src="images/logo.png"></a>
    <nav class="fr">
      <ul class="menus">
        <li data-menuanchor="page1" class="active"><a href="#page1">首页</a></li>
        <li data-menuanchor="page2"><a href="#page2">国际供应链介绍</a></li>
        <li data-menuanchor="page3"><a href="#page3">分公司的拓展</a></li>
        <li data-menuanchor="page4"><a href="#page4">主营产品展示</a></li>
        <li data-menuanchor="page5"><a href="#page5">供应链商场</a></li>
        <li data-menuanchor="page6"><a href="#page6">联营商 /代理商招募</a></li>
        <li data-menuanchor="page7"><a href="#page7">合作品牌展示</a></li>
        <li data-menuanchor="page8"><a href="#page8">联系我们</a></li> 
      </ul>
    </nav>
  </div>
</header>
<!-- 头部导航结束 --> 

<!-- 主体开始 -->
<div class="con" id="page">
  <div class="section s1 active">
  	 <img class="in_gjhgtu" src="images/wenzi.png">
     <a href=""><img class="in_ljgd" src="images/ljgd.png"></a>
     <img class="in_jt" src="images/jt.png">
     <a class="in_fenx1 icon" href=""></a>
     <a class="in_fenx2 icon" href=""></a>
     <a class="in_fenx3 icon" href=""></a>
     <a class="in_fenx4 icon" href=""></a>
     <a href="#page2"><img class="in_dow" src="images/in_dow.png"></a>
  </div>
  
  <!-- 第二页 -->
  <div class="section s2">
    <div class="two_shanghu">
    	<div class="two_sh30 fl">
        	<a class="two_sh30_tu icon"></a>
            <p class="two_sh30_shuzi">30,000+</p>
            <p class="two_hengxian"></p>
            <p class="two_sh30_rzi">入住商户</p>
        </div>
        <div class="two_sh30 fl">
        	<a class="two_sh30_tu2 icon"></a>
            <p class="two_sh30_shuzi">900,000+</p>
            <p class="two_hengxian"></p>
            <p class="two_sh30_rzi">近三个月为商户配送次数</p>
        </div>
        <div class="two_sh30 fl">
        	<a class="two_sh30_tu3 icon"></a>
            <p class="two_sh30_shuzi">36%</p>
            <p class="two_hengxian"></p>
            <p class="two_sh30_rzi">累计为商户降低采购成本</p>
        </div>
    </div>
    <div class="two_daili">
    	<div class="two_daili_1200">
        	<div class="fl"><img src="images/diannao.png" width="506" height="407" /></div>
            <div class="two_head fr">
            	<div class="two_head_title">
                	<p class="two_head_title_shu fl"></p>
                    <p class="two_head_title_zi fl">关于重庆国际火锅供应链</p>
                </div>
                <p class="two_head_con">
                2015年底，顺应火锅行业近几年在中国良好的发展趋势，国际火锅供应链公司入驻重庆，在重庆建立了办事处。组织致力于通过业界管理经验分享、科学培训以促进火锅行业在中国的发展水平，实现企业管理的优化。
                </p>
                <p class="two_head_con">
               我们致力于打造与国际贸易市场、国际消费市场接轨的火锅产业链，为加盟产业链的客户创造更大的经济价值，同时我们集团和国内众多大型火锅知名品牌为战略合作伙伴。
                </p>
                <a class="two_head_anniu" href=""></a>
            </div>
        </div>
    </div>
  </div>
  
  <!-- 第三页 -->
  <div class="section s3">
   		<div class="three_1800">
        	<div class="three_790 fl">
            	<div class="three_790_head">
					<p class="three_head_title_shu fr"></p>
                    <p class="three_head_title_zi fr">分公司的拓展</p>
                </div>
                <div class="three_790_con" id="tab">
                	<div class="tabList fl">
                        <ul>
                            <li class="cur"></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="tabCon fl">
                        <div class="cur">
                        	<a class="three_fengs">
                            	<p class="three_fengs_head">成都分公司1</p>
                                <p class="three_fengs_con">成都高新区天华二路81号天府软件园C区4号楼</p>
                                <p class="three_fengs_con">(028)85225111</p>
                            </a>
                            <a class="three_fengs">
                            	<p class="three_fengs_head">成都分公司2</p>
                                <p class="three_fengs_con">成都高新区天华二路81号天府软件园C区4号楼</p>
                                <p class="three_fengs_con">(028)85225111</p>
                            </a>
                            <a class="three_fengs">
                            	<p class="three_fengs_head">成都分公司3</p>
                                <p class="three_fengs_con">成都高新区天华二路81号天府软件园C区4号楼</p>
                                <p class="three_fengs_con">(028)85225111</p>
                            </a>
                        </div>
                        <div class="">
                        	<a class="three_fengs">
                            	<p class="three_fengs_head">成都分公司1</p>
                                <p class="three_fengs_con">成都高新区天华二路81号天府软件园C区4号楼</p>
                                <p class="three_fengs_con">(028)85225111</p>
                            </a>
                            <a class="three_fengs">
                            	<p class="three_fengs_head">成都分公司2</p>
                                <p class="three_fengs_con">成都高新区天华二路81号天府软件园C区4号楼</p>
                                <p class="three_fengs_con">(028)85225111</p>
                            </a>
                            <a class="three_fengs">
                            	<p class="three_fengs_head">成都分公司3</p>
                                <p class="three_fengs_con">成都高新区天华二路81号天府软件园C区4号楼</p>
                                <p class="three_fengs_con">(028)85225111</p>
                            </a>
                        </div>
                        <div class="">
                        	<a class="three_fengs">
                            	<p class="three_fengs_head">成都分公司1</p>
                                <p class="three_fengs_con">成都高新区天华二路81号天府软件园C区4号楼</p>
                                <p class="three_fengs_con">(028)85225111</p>
                            </a>
                            <a class="three_fengs">
                            	<p class="three_fengs_head">成都分公司2</p>
                                <p class="three_fengs_con">成都高新区天华二路81号天府软件园C区4号楼</p>
                                <p class="three_fengs_con">(028)85225111</p>
                            </a>
                            <a class="three_fengs">
                            	<p class="three_fengs_head">成都分公司3</p>
                                <p class="three_fengs_con">成都高新区天华二路81号天府软件园C区4号楼</p>
                                <p class="three_fengs_con">(028)85225111</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="three_900 fr">
                <div class="banner">
                    <div class="inner">
                        <div class="menu">
                            <ul>
                                <li class="active">
                                    <a href="javascript:;" class="png menu_home">
                                        <span class="hide"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="png menu_game">
                                        <span class="hide"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="png menu_video">
                                        <span class="hide"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mask"></div>
                </div>
            </div>
        </div>
  </div>
  
  <!-- 第四页 -->
  <div class="section s4">
    	<div class="four_1100">
        	<div class="four_head_tu"><img src="images/cpzs.png" width="216" height="109" /></div>
            <div class="four_head_zi">
            	<a href="" class="fourxz">全部</a>
                <a href="" class="">蔬菜</a>
                <a href="" class="">肉类</a>
                <a href="" class="">水产</a>
                <a href="" class="">海鲜</a>
                <a href="" class="">饮料</a>
                <a href="" class="">啤酒</a>
            </div>
        </div>
        <div class="four_cpzs">
        	<ul class="artist">
                <li class="four_cpzs_25 fl">
                    <img src="images/001.jpg" />
                    <a class="cover" href="" style="top:0">
                    	<br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <span>青海绿色无公害豆皮</span><br />
                        <b>点击进入商城购买</b>
                    </a>
                </li>
                <li class="four_cpzs_25 fl">
                    <img src="images/001.jpg" />
                    <a class="cover" href="" style="top:0">
                    	<br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <span>青海绿色无公害豆皮</span><br />
                        <b>点击进入商城购买</b>
                    </a>
                </li>
                <li class="four_cpzs_25 fl">
                    <img src="images/001.jpg" />
                    <a class="cover" href="" style="top:0">
                    	<br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <span>青海绿色无公害豆皮</span><br />
                        <b>点击进入商城购买</b>
                    </a>
                </li>
                <li class="four_cpzs_25 fl">
                    <img src="images/001.jpg" />
                    <a class="cover" href="" style="top:0">
                    	<br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <span>青海绿色无公害豆皮</span><br />
                        <b>点击进入商城购买</b>
                    </a>
                </li>
                <li class="four_cpzs_25 fl">
                    <img src="images/001.jpg" />
                    <a class="cover" href="" style="top:0">
                    	<br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <span>青海绿色无公害豆皮</span><br />
                        <b>点击进入商城购买</b>
                    </a>
                </li>
                <li class="four_cpzs_25 fl">
                    <img src="images/001.jpg" />
                    <a class="cover" href="" style="top:0">
                    	<br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <span>青海绿色无公害豆皮</span><br />
                        <b>点击进入商城购买</b>
                    </a>
                </li>
                <li class="four_cpzs_25 fl">
                    <img src="images/001.jpg" />
                    <a class="cover" href="" style="top:0">
                    	<br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <span>青海绿色无公害豆皮</span><br />
                        <b>点击进入商城购买</b>
                    </a>
                </li>
                <li class="four_cpzs_25 fl">
                    <img src="images/001.jpg" />
                    <a class="cover" href="" style="top:0">
                    	<br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <span>青海绿色无公害豆皮</span><br />
                        <b>点击进入商城购买</b>
                    </a>
                </li>
            </ul>
        </div>
  </div>
  
  <!-- 第五页 -->
  <div class="section s5">
    	<div class="four_1100">
        	<div class="four_head_tu"><img src="images/gysc.png" width="196" height="109" /></div>
        </div>
        <div class="wu_con">
        	<div class="wu_bjtu">
            	<p class="wu_bjtu_head">重庆国际火锅供应链商城</p>
                <p class="wu_bjtu_con">
               	主要经营餐饮管理；餐饮项目开发；销售：水果（国家在专项管理规定的产品除外）、禽畜产品、饲料、冻冻设备、保温材料、橡胶及其制品、农副产品、日用百货、针纺织品、五金交电、家用电器、机电设备及机械；货物及技术进出口（不含国家禁止或限制进出口项目）；水产品（不含药品、食品以及其他需经许可或审批的项目）、肉类的配送及销售；非食用冰制造及销售。
                </p>
                <a href="" class="wu_bjtu_con_anniu"><img src="images/jinrusc.png" /></a>
            </div>
        </div>
  </div>
  <!--第六页-->
  <div class="section s6">
    	<div class="liu_zitu"><img src="images/zhaomu.png" /></div>
         <a class="liu_head_anniu" href=""></a>
  </div>
  <!--第七页-->
  <div class="section s5">
    	<div class="four_1100">
        	<div class="four_head_tu"><img src="images/gysc.png" width="196" height="109"></div>
        </div>
        <div class="qi_width_1440">
        	<ul>
            	<li><img src="images/kf1.jpg" /></li>
                <li><img src="images/kf1.jpg" /></li>
                <li><img src="images/kf1.jpg" /></li>
                <li><img src="images/kf1.jpg" /></li>
                <li><img src="images/kf1.jpg" /></li>
                <li><img src="images/kf1.jpg" /></li>
                <li><img src="images/kf1.jpg" /></li>
                <li><img src="images/kf1.jpg" /></li>
                <li><img src="images/kf1.jpg" /></li>
                <li><img src="images/kf1.jpg" /></li>
            </ul>
        </div>
  </div>
  <!--第八页-->
  <div class="section s7">
    	<div class="four_1100">
        	<div class="four_head_tu"><img src="images/about.png" width="196" height="109" /></div>
        </div>
      <form action="<?php echo U('messageAdd');?>" method="post">
        <div class="ba_con_1170">
        	<div class="ba_con_left fl">
            	<p class="ba_con_left_head">我们的地址</p>
                <p class="ba_con_left_con">重庆市劳动人民文化宫重庆市火锅协会负一楼刘一手办公室</p>
                
                <p class="ba_con_left_head">联系电话</p>
                <p class="ba_con_left_con">400 833 83333</p>
                <p class="ba_con_left_con">02366777777</p>
                
                <p class="ba_con_left_head">我们的邮箱</p>
                <p class="ba_con_left_con">contactus@email.com</p>
            </div>
            <div class="ba_con_right fr">
           		<div class="ba_con_right_520">
                	<div class="ba_con_right_lish">
                    	<p class="ba_con_right_name fl">姓名</p>
                        <div class="ba_con_right_input fr">
                        	<input type="text" name="name" />
                        </div>
                    </div>
                    <div class="ba_con_right_lish">
                    	<p class="ba_con_right_name fl">邮箱</p>
                        <div class="ba_con_right_input fr">
                        	<input type="text" name="email" />
                        </div>
                    </div>
                    
                    <div class="ba_con_right_lish">
                    	<p class="ba_con_right_name fl">电话</p>
                        <div class="ba_con_right_input fr">
                        	<input type="text" name="tel" />
                        </div>
                    </div>
                    
                    <div class="ba_con_right_lish">
                    	<p class="ba_con_right_message_name">留言板</p>
                        <div class="ba_con_right_textarea">
                        	<textarea name="intro"></textarea>
                        </div>
                    </div>

                    <a class="ba_con_right_anniu0" href="">
                    	<img src="images/messgaesanniu.png" width="165" height="52" class="sublint"/>
                    </a>
                    
                </div>
            </div>
        </div>
      </form>

      <div class="ba_foot">
        	<div class="ba_foot_1100">
            	<div class="ba_foot_1100_fl fl">
                	<a href="" class="ba_foot_1100_qq fl"></a>
                    <a href="" class="ba_foot_1100_wx fl"></a>
                </div>
                <div class="ba_foot_1100_right fr">
                	<p>Chongqing international hot pot supply chain</p>
                </div>
            </div>
        </div>
  </div>
</div>
<!-- 主体结束 -->
</body>
<saript type="text/javascript">
    $('.sublint').on('clink',function(){
        alert('nihao');
    })
</saript>
</html>