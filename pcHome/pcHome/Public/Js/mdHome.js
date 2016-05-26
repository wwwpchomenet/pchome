define(function(require) {
	var Header = require("../../common/js/header");
	Header.bindActiveTab(Header.tabs.mdHome, Header.tabs.mdHomeHref);
	/*require("../../common/js/toMobilePage");*/
	require("../../common/js/footer");
	require("../../common/lib/jquery.easings");
	require("../../common/lib/jquery.fullPage");
	var Register = require("../../common/js/register");

	var Home = {};

	Home.options = {
		speed: 1000,
		timerSpeed: 6000,
		key: 0,
		circle: 0,
		timer: null
	};
	var imgUrl = {
		section2: {
			'imgMin': '/modules/mdpublic/staticPage/mdHome/images/bg002.jpg',
			'imgCen': '/modules/mdpublic/staticPage/mdHome/images/bg02.jpg',
			'imgMax': '/modules/mdpublic/staticPage/mdHome/images/bg2.jpg'
		},
		section4: {
			bannerImg1:{
				'imgMax': '/modules/mdpublic/staticPage/mdHome/images/banner1.jpg',
				'imgMin': '/modules/mdpublic/staticPage/mdHome/images/banner001.jpg',
				'imgCen': '/modules/mdpublic/staticPage/mdHome/images/page3_01.jpg',
			},
			bannerImg2:{
				'imgMax': '/modules/mdpublic/staticPage/mdHome/images/banner2.jpg',
				'imgMin': '/modules/mdpublic/staticPage/mdHome/images/banner002.jpg',
				'imgCen': '/modules/mdpublic/staticPage/mdHome/images/page3_02.jpg',
			},
			bannerImg3:{
				'imgMax': '/modules/mdpublic/staticPage/mdHome/images/banner3.jpg',
				'imgMin': '/modules/mdpublic/staticPage/mdHome/images/banner003.jpg',
				'imgCen': '/modules/mdpublic/staticPage/mdHome/images/page3_03.jpg',
			},
			bannerImg4:{
				'imgMax': '/modules/mdpublic/staticPage/mdHome/images/banner4.jpg',
				'imgMin': '/modules/mdpublic/staticPage/mdHome/images/banner004.jpg',
				'imgCen': '/modules/mdpublic/staticPage/mdHome/images/page3_04.jpg',
			}
		},
		section5: {
			'imgMin': '/modules/mdpublic/staticPage/mdHome/images/bg005.jpg',
			'imgCen': '/modules/mdpublic/staticPage/mdHome/images/bg05.jpg',
			'imgMax': '/modules/mdpublic/staticPage/mdHome/images/bg5.jpg'
		},
		section6: {
			'imgMin': '/modules/mdpublic/staticPage/mdHome/images/bg006.jpg',
			'imgCen': '/modules/mdpublic/staticPage/mdHome/images/bg6.jpg',
			'imgMax': '/modules/mdpublic/staticPage/mdHome/images/bg6.jpg'
		},
		section7: {
			'imgMax': '/modules/mdpublic/staticPage/mdHome/images/bg7.jpg'
		}
	};

	Home.init = function () {

	    Register.init(".btnForReg");
	    Register.init(".btnBottomForReg");

	    Register.init(".btnBottomForReg");

		$(".hearder li:first").addClass('current');
		/*$(".header").addClass('pageForOne');*/
		var scrollID;
		var $page = $("#page");

		var currentPage = 1;
		//滚动底部的footer
		var scrollBottom = function(e) {
			e = e.originalEvent;
			window.clearTimeout(scrollID);
			if (currentPage !== 7) {
				return;
			} //只有最后一屏时才滚�
			var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.deltaY || -e.detail)));
			scrollID = window.setTimeout(function() {
				if (delta > 0) { //向上滚动 //从底部向上滚动时恢复全屏滚动
					$page.removeClass("isBottom");
					$.fn.fullpage.setAllowScrolling(true);
				} else { //向下滚动
					$.fn.fullpage.setAllowScrolling(false);
					$page.addClass("isBottom");
				}
			}, 100);
		};
		$page.fullpage({
			css3: true,
			resize: true,
			navigation: true,
			navigationPosition: 'right',
			afterLoad: function(anchorLink, index) {
				currentPage = index;
				/*if (currentPage == 1) {
					$(".header").addClass('pageForOne');
				} else {
					$(".header").removeClass('pageForOne');
				}*/
				if (index === 7) {
					$.fn.fullpage.setAllowScrolling(false);
					$(document).off("keyup.md");
					$(document)
						.on("wheel mousewheel DOMMouseScroll", scrollBottom)
						.on("keyup.md", function(e) {
							if (e.keyCode === 38) { //up
								$page.removeClass("isBottom");
								$.fn.fullpage.setAllowScrolling(true);
							} else if (e.keyCode === 40) { //down
								$.fn.fullpage.setAllowScrolling(false);
								$page.addClass("isBottom");
							}
						});
					/*尾屏手机滑动*/
					var startY, moveEndY, Y;
					$(".section7,.footer").on("touchstart", function(e) {
						//e.preventDefault();
						startY = e.originalEvent.changedTouches[0].pageY;
					});
					$(".section7,.footer").off("touchmove").on("touchmove", function(e) {
						//e.preventDefault();
						moveEndY = e.originalEvent.changedTouches[0].pageY,
							Y = moveEndY - startY;
						if (Y > 0) {
							$page.removeClass("isBottom");
							$.fn.fullpage.setAllowScrolling(true);
						} else {
							$.fn.fullpage.setAllowScrolling(false);
							$page.addClass("isBottom");
						}
					});
				} else {
					$page.removeClass("isBottom");
					$.fn.fullpage.setAllowScrolling(true);
				}
			},
			onLeave: function(index) {
				if (index === 7) {
					$.fn.fullpage.setAllowScrolling(false);
					$(document).off("keyup.md");
					$(document)
						.on("wheel mousewheel DOMMouseScroll", scrollBottom)
						.on("keyup.md", function(e) {
							if (e.keyCode === 38) { //up
								$.fn.fullpage.setAllowScrolling(true);
							} else if (e.keyCode === 40) { //down
								$.fn.fullpage.setAllowScrolling(false);
							}
						});
				}
			}
		});
		var Util = require("util");
		var request = Util.getRequest();
		var type = "";
		if (request["sectionPage"]) {
			type = request["sectionPage"];
			currentPage = type;
			$.fn.fullpage.moveTo(type);
		}
		/*点击鼠标跳到第二屏*/
		$(".section1 .forDown").click(function(event) {
			currentPage = 2;
			$.fn.fullpage.moveTo($(this).index() + 1);
		});
		Home.userList(); /*page3*/
		Home.headerNav();
		Home.bannerRun();
		if (navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.split(";")[1].replace(/[ ]/g, "") == "MSIE8.0") {
		}else{			
			Home.chageBg();
			$(window).resize(function(event) {
				Home.chageBg();
			});
		}
	};
	Home.chageBg = function() {
		var setBgImg = function(imgLink){
			$(".section2").css('background-image', 'url("' + imgUrl.section2[imgLink]+ '")');
			$(".section5").css('background-image', 'url("' + imgUrl.section5[imgLink] + '")');
			$(".section6 .section6Bg").css('background-image', 'url("' + imgUrl.section6[imgLink] + '")');
			$(".section4 .bannerImg1").css('background-image', 'url("' + imgUrl.section4.bannerImg1[imgLink] + '")');
			$(".section4 .bannerImg2").css('background-image', 'url("' + imgUrl.section4.bannerImg2[imgLink] + '")');
			$(".section4 .bannerImg3").css('background-image', 'url("' + imgUrl.section4.bannerImg3[imgLink] + '")');
			$(".section4 .bannerImg4").css('background-image', 'url("' + imgUrl.section4.bannerImg4[imgLink] + '")');
		}
		if (document.body.clientWidth >= 1024) {
			setBgImg("imgMax");
		} else if ((document.body.clientWidth <= 1023 && document.body.clientWidth >= 641)) {
			setBgImg("imgCen");
		} else if(document.body.clientWidth <= 640){
			setBgImg("imgMin");
		}
		$(".section7").css('background-image', 'url("' + imgUrl.section7.imgMax + '")');
	};
	Home.bannerRun = function() {
		Home.options.timer = setInterval(Home.autoplay, Home.options.timerSpeed);
		$(".bannerImg ul,.bannerImg .leftIcon,.bannerImg .rightIcon").hover(function() {
			clearInterval(Home.options.timer);
			Home.options.timer = null;
		}, function() {
			clearInterval(Home.options.timer);
			Home.options.timer = setInterval(Home.autoplay, Home.options.timerSpeed);
		});
		$(".bannerImg ul,.bannerImg .leftIcon,.bannerImg .rightIcon").hover(function() {
			$(".bannerImg .leftIcon,.bannerImg .rightIcon").stop().fadeIn("fast");
		}, function() {
			$(".bannerImg .leftIcon,.bannerImg .rightIcon").fadeOut();
		});
		/*点击点跳转banner*/
		$(".bannerBox ol li").click(function(event) {
			Home.options.key = $(this).index();
			$(this).addClass('current').siblings('li').removeClass('current');
			$(".bannerImg ul>li").eq(Home.options.key).fadeIn(Home.options.speed).siblings('li').fadeOut();
			$(".bannerText ul li").eq(Home.options.key).show().siblings('li').hide();
		});
		$(".bannerImg .rightIcon i").click(function(event) {
			Home.autoplay();
		});
		$(".bannerImg .leftIcon i").click(function(event) {
			Home.options.key--;
			var num = $(".bannerImg ul>li").length
			Home.options.key = Home.options.key % num;
			$(".bannerImg ul>li").eq(Home.options.key).fadeIn(Home.options.speed).siblings('li').fadeOut();
			$(".option li").eq(Home.options.key).addClass('current').siblings('li').removeClass('current');
			$(".bannerText ul li").eq(Home.options.key).show().siblings('li').hide();
		});
	};

	Home.autoplay = function() {
		Home.options.key++;
		var num = $(".bannerImg ul>li").length
		Home.options.key = Home.options.key % num;
		$(".bannerImg ul>li").eq(Home.options.key).fadeIn(Home.options.speed).siblings('li').fadeOut();
		$(".option li").eq(Home.options.key).addClass('current').siblings('li').removeClass('current');
		$(".bannerText ul li").eq(Home.options.key).show().siblings('li').hide();
	};


	Home.userList = function() {
		$(".section3 .userListBox ul li").hover(function() {
			if (document.body.clientWidth >= 640) {
				$(this).children('.userText').hide().siblings('.coverBox').addClass('in-left');
			}
		}, function() {
			if (document.body.clientWidth >= 640) {
				$(this).children('.coverBox').removeClass('in-left').siblings('.userText').show();
			}
		});
	};

	Home.headerNav = function() {
		$(".header span").click(function(event) {
			$(".header .container ul,.header .headerAction").toggleClass('displayBlock');
		});
	};
	$(function() {
		Home.init();
	});
});