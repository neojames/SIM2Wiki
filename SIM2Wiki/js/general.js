//SIM2Wiki by James Bolton.
//Distrubuted under the LGPL
//See http://neojames.me/ for more information
			
$(document).ready(function(){
	$('.toggleVisibility').click(function () {
		$($(this).data('target')).toggle('slow');
	});
});