//SIM2Wiki by James Bolton.
//Distributed under the LGPL
//See http://neojames.me/ for more information

$(document).ready(function () {
	$('input[name="people"]').change(function () {
		if ($('input[name="people"][value="0"]').is(":checked") === true) {
			$('#form').attr('action', "process-advanced.php");
			$('#People').show('slow');
			$('#Templates').show('slow');
		}

		else

		if ($('input[name="people"][value="1"]').is(":checked") === true) {
			$('#form').attr('action', "process-basic.php");
			$('#People').hide('slow');
			$('#Templates').hide('slow');
		}
	});

	$('input[name="templates"]').change(function () {
		if 
	}
});