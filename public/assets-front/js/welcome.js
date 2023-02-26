window.onload = function () {
	$(function () {
		$('body').css('background', 'url(\'/public/images/bck_bs copy.jpg\') no-repeat');
		$('body').css("background-size", "cover");
		$('#tags').
			mouseenter(function () {
				$('body').css('background', 'url(\'/public/images/bck_bs2 copy.jpg\')');
				$('body').css("background-size", "cover");
			}).
			mouseleave(function () {
				$('body').css('background', 'url(\'/public/images/bck_bs copy.jpg\')');
				$('body').css("background-size", "cover");
			})
	})
}