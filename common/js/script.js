$(function () {
	var ua = navigator.userAgent;
	var window_width = $(window).width();
	if (ua.indexOf("iPad") > 0 || (ua.indexOf("Android") > 0 && 600 <= window_width && window_width <= 1024)) {
		$('head meta[name="viewport"]').attr("content", "width=1024");
	}

	var $wins = $(window);
	$wins.on("load resize", function () {
		var headerHeight = $("header").outerHeight();
		var windowWidth = window.innerWidth;
		// if (windowWidth > 1024) {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 400) {
				$(".spnaviwrap").addClass("changed");
				$(".logo_wrap").addClass("changed");
			} else {
				$(".spnaviwrap").removeClass("changed");
				$(".logo_wrap").removeClass("changed");
			}
		});
	});
	/*-----------------------------------
		ハンバーガー
	-----------------------------------*/
	$(".menu-trigger").on("click", function () {
		$(".spnaviwrap").toggleClass("active");
		$("header").toggleClass("active");
		$("#parts").toggleClass("active");
	});

	$(document).click(function (event) {
		if (!$(event.target).closest(".mageb,.magabox").length) {
			$(".hpc_nav a").removeClass("on");
			$(".megainner > dl").removeClass("on");
			$(".magabox").removeClass("on");
		} else {
		}
	});

	$("#hamburger").click(function (e) {
		$(this).toggleClass("active");
		$(".header-sp").toggleClass("active");
	});

	/*-----------------------------------
		トグル処理
	-----------------------------------*/
	$(".sToggle dt").on("click", function () {
		$(this).toggleClass("togg");
		$(this).nextAll("dd").slideToggle();
	});

	/*-----------------------------------
		ボタン切替
	-----------------------------------*/
	$(".boxcg_btn_Box > a").on("click", function () {
		var ids = $(this).attr("id");
		$(".boxcg_btn_Box > a").removeClass("on");
		$(".boxcg_Box > div").removeClass("on");
		$(this).addClass("on");
		$("#" + ids + "_s").addClass("on");
	});
	/*-----------------------------------
		POPUP
	-----------------------------------*/
	$(".popup_btn_Box > a").on("click", function () {
		$(".popup_btn_Box > a").removeClass("on");
		$(this).addClass("on");
		$(".popup_Box").addClass("on");
	});

	$(".close").on("click", function () {
		$(this).parent().parent().removeClass("on");
		$(".popup_btn_Box > a").removeClass("on");
	});

	/*-----------------------------------
		VIEW MORE
	-----------------------------------*/

	var item = $("#js_listItem").children("li");
	var btn = $("#js_listItem_more");
	var className = "is_hidden";

	var itemsList = function () {
		//表示されているliの個数を取得
		var items = $(item).filter(":visible").length;
		//ボタンの表示・非表示
		if (items > 2) {
			$(btn).show();
		} else {
			$(btn).hide();
		}
		(function () {
			var addCount = 0;

			$(item).each(function () {
				if (addCount === 2) {
					$(this).addClass(className);
					return;
				}
				if (!$(this).hasClass(className)) {
					addCount++;
				}
			});
		})();
	};

	itemsList();

	$(btn).on("click", function () {
		var hiddenLength = $("#js_listItem").children("li.is_hidden").length;
		if (hiddenLength === 0) {
			return;
		}
		var moreCount = 0;
		$("#js_listItem")
			.children("li.is_hidden")
			.each(function () {
				if (moreCount === 2) {
					return;
				}
				if ($(this).hasClass(className)) {
					var hiddenLength = $("#js_listItem").children("li.is_hidden").length;
					$(this).removeClass(className);
					moreCount++;
				}
				if (hiddenLength === 1) {
					$(btn).hide();
				}
			});
	});

	/*-----------------------------------
		クリック増減
	-----------------------------------*/

	$(".add").on("click", function () {
		$(this).parent().parent().parent().clone(true).insertAfter($(this).parent().parent().parent());
	});
	$(".del").on("click", function () {
		var target = $(this).parent().parent().parent();
		if (target.parent().children().length > 1) {
			target.remove();
		}
	});

	/*-----------------------------------
		TOTOP
	-----------------------------------*/
	var topBtn = $(".totop_wrap");
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});

	topBtn.click(function () {
		$("body,html").animate(
			{
				scrollTop: 0,
			},
			500
		);
		return false;
	});

	/*-----------------------------------
		スクロール　クラス追加
	-----------------------------------*/

	var jsEffect = function () {
		$(window).on("scroll load", function () {
			var sc = $(window).scrollTop(),
				wh = window.innerHeight;
			$(".anis,.effectFU").each(function (index, el) {
				var pos = $(this).offset().top;
				if (pos < sc + wh * 0.7) {
					$(this).addClass("isShow");
				}
			});
		});
	};

	$(function () {
		jsEffect();
	});

	/*-----------------------------------
		別ページからのスムース
	-----------------------------------*/
	var urlHash = location.hash;
	console.log(urlHash);
	if (urlHash) {
		$("body,html").stop().scrollTop(0);
		setTimeout(function () {
			var target = $(urlHash);
			var headerHeight = $("header").outerHeight();
			var position = target.offset().top - 0;
			$("body,html").stop().animate({ scrollTop: position }, 500);
		}, 100);
	}

	/*-----------------------------------
		＃スムース
	-----------------------------------*/
	$('a[href^="#"]').not('#totop').click(function () {
		var speed = 500;
		var headerHights = $("header").outerHeight();
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? "html" : href);
		var position = target.offset().top;
		$("html, body").animate({ scrollTop: position }, speed, "swing");
		return false;
	});

});
