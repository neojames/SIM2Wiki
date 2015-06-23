//SIM2Wiki by James Bolton.
//Distributed under the LGPL
//See http://neojames.me/ for more information

//Plugins, etc.

jQuery.fn.slideFadeToggle = function(speed, easing, callback){
	return this.animate({ opacity: 'toggle', width: 'toggle', fontSize: 'toggle' }, speed, easing, callback);
};

//Main Function

$(document).ready(function(){
	$('.toggleVisibility').click(function () {
		$($(this).data('target')).slideFadeToggle('slow');
	});

	$('input[type=submit], button, input[type=button]').button();
	$('.radioSet').buttonset();
	$('#font').spinner({
		min: 0,
		max: 30,
		step: 1,
		start: 12
	});
	$('.toggleVisibility').click(function(event){event.preventDefault();});
});

$(window).bind("load", function () {

	var footerHeight = 0,
		footerTop = 0,
		$footer = $("#footer");

	positionFooter();

	function positionFooter(){

		footerHeight = $footer.height();
		footerTop = ($(window).scrollTop() + $(window).height() - footerHeight) - 16 + "px";

		if (($(document.body).height() + footerHeight) < $(window).height()) {
			$footer.css({
				position: "absolute"
			}).animate({
				top: footerTop
			})
		} else {
			$footer.css({
				position: "static"
			})
		}
	}

	$(window)
			.scroll(positionFooter)
			.resize(positionFooter)
});