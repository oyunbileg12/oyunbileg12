$(function () {
	$(".body01").css("display", "none");
	$(".hosoku_btn").click(function () {
		$(this).parent().parent().find(".body01").slideToggle(150);
	});
	var cancelFlag = 0;
	$(".code-copy__btn").click(function () {
		if (cancelFlag == 0) {
			cancelFlag = 1;
			var code = $(this).parent().parent().find(".partsInBox").html();
			// code = htmlspecialchars(code);
			$(this).append('<textarea class="gxg">' + code + "</textarea>");
			$(".gxg").select();
			document.execCommand("copy");
			$(".gxg").remove();
			// alert("コピーしましたよ" + code);
			$(".catin_wp").addClass("on");
			setTimeout(function () {
				$(".catin_wp").removeClass("on");
				cancelFlag = 0;
			}, 2000);
		}
	});
	$(".code-copy__btn2").click(function () {
		if (cancelFlag == 0) {
			cancelFlag = 1;
			var code = $(this).parent().parent().find(".hosolu_csstwp code").html();
			// code = htmlspecialchars(code);
			$(this).append('<textarea class="gxg">' + code + "</textarea>");
			$(".gxg").select();
			document.execCommand("copy");
			$(".gxg").remove();
			// alert("コピーしましたよ" + code);
			$(".catin_wp").addClass("on");
			setTimeout(function () {
				$(".catin_wp").removeClass("on");
				cancelFlag = 0;
			}, 2000);
		}
	});
	function htmlspecialchars(str) {
		str = str.replace(/</g, "&lt;");
		return str;
	}

	$(".cl_sele_inbox > select").change(function () {
		var vals = $(this).val();
		var cities = $(this).children();
		func_selchan(vals, cities);
	});

	function func_selchan(vals, cities) {
		var lencss = "";
		for (var i = 0; i < cities.length; i++) {
			if (cities.eq(i).val() != "") {
				lencss += cities.eq(i).val() + " ";
			}
		}
		$("#cl_change_box").removeClass(lencss);
		$("#cl_change_box").addClass(vals);
	}

	$(".cl_sele_inbox_2 > select").change(function () {
		var vals = $(this).val();
		var cities = $(this).children();
		func_selchan2(vals, cities);
	});

	function func_selchan2(vals, cities) {
		var lencss = "";
		for (var i = 0; i < cities.length; i++) {
			if (cities.eq(i).val() != "") {
				lencss += cities.eq(i).val() + " ";
			}
		}
		$("#Box_chg").removeClass(lencss);
		$("#Box_chg").addClass(vals);
	}

	$("#color-dialog").on("change", function () {
		$("#colabel").css("color", $("#color-dialog").val());
		$("#Box_chg").css("color", $("#color-dialog").val());
		$("#colabel_txt").text($("#color-dialog").val());
	});
});
