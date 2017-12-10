$(function() {

	$(window).scroll(function() {
		var t = $(this).scrollTop()
		if(t > 200) {
			$(".backtop").stop().fadeIn();
		} else {
			$(".backtop").stop().fadeOut();
		}

	})

	$(".backtop").click(function() {

		$("body,html").stop().animate({
			scrollTop: 0
		}, 300)
	})

})