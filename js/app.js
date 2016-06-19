$("#subscribeForm").ajaxForm({
	url: "https://2014.cssconf.asia/addsubscriber.php",
	dataType: "html",
	beforeSubmit: function() {
		$("#subscribeForm").removeClass("failure success").addClass("load");
		$("#subscribeForm .msg").removeClass("play");
	},
	success: function(r) {
		if(r.substr(0,6) != "Thanks") {
			$("#subscribeForm").removeClass("load").addClass("failure");
			$("#subscribeForm .msg span").text(r.substr(0,r.indexOf('<br/>')));
			$("#subscribeForm .msg").addClass("play");
			setTimeout(function() {
				$("#subscribeForm").removeClass("failure");
				$("#subscribeForm input[name='email']").focus();
			},5000);
		}
		else {
			$("#subscribeForm").removeClass("load").addClass("success");
			$("#subscribeForm .msg span").text("Thanks. We'll keep you updated!");
			$("#subscribeForm .msg").addClass("play");
			setTimeout(function() {
				$("#subscribeForm input[name='email']").val("");
				$("#subscribeForm").removeClass("success active");
				$("#subscribeForm .msg").removeClass("play");
			},3000);
			setTimeout(function() {
				window.location = "https://facebook.com/cssconfasia";
			},3200);
		}
	},
	error: function(r, s) {
		$("#subscribeForm").removeClass("load").addClass("failure");
		$("#subscribeForm .msg span").text("Something went utterly wrong...");
		setTimeout(function() {
			$("#subscribeForm").removeClass("failure");
		},4000);
	}
});

$("#subscribeForm .msg").click(function() {
	$("#subscribeForm").removeClass("failure success");
	$("#subscribeForm input[name='email']").focus();
});

$currentSpeaker = $();
$('.speaker').click(function(e) {
	if($(e.currentTarget).is('a')) {
		return;
	}
	if($(e.currentTarget).hasClass('open')) {
		$(e.currentTarget).removeClass('open');
	}
	else {
		if($currentSpeaker.hasClass('open')) {
			$currentSpeaker.removeClass('open');
		}
		$(e.currentTarget).addClass('open');
	}

	$currentSpeaker = $(e.currentTarget);
});

setTimeout(function() {
	$("body").removeClass("loading");
}, 1400);


var menuVisible = false
var fromTop = 200;
$(window).on("scroll touchmove", function (e) {
	if(window.pageYOffset > fromTop + 60 && !menuVisible) {
		menuVisible = true;
		$("body").addClass("visible");
	}
	else if(window.pageYOffset <= fromTop && menuVisible) {
		$("body").removeClass("visible");
		menuVisible = false;
	}
});

function detectSafari() {
    var uag = window.navigator.userAgent;

    if (uag.indexOf('iPhone') !== -1 && uag.indexOf('Safari') !== -1 && uag.indexOf('CriOS') === -1 && uag.indexOf('FxiOS') === -1) {
      document.body.classList.add('dealWithMobileSafari')
      window.dealWithMobileSafari = true
    } else {
      document.body.classList.remove('dealWithMobileSafari')
      window.dealWithMobileSafari = false
    }
}

window.onresize = detectSafari
detectSafari()
