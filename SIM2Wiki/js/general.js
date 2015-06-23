//SIM2Wiki by James Bolton.
//Distrubuted under the LGPL
//See http://neojames.me/ for more information

function OnSubmitForm(){
	if(document.getElementById('form').operation[0].checked == true){
		document.getElementById('form').action ="process-advanced.php";
		}
					
	else
				
	if(document.getElementById('form').operation[1].checked == true){
		document.getElementById('form').action ="process-basic.php";
	}
				
	return true;
}
			
function People(){
	if(document.getElementById('form').operation[0].checked == true){
		document.getElementById('People').style.display = 'block';
}
				
	else
				
	if(document.getElementById('form').operation[1].checked == true){
		document.getElementById('People').style.display = 'none';
	}
}

$(document).ready(function(){
    $('.toggleVisibility').click(function () {
        $($(this).data('target')).toggle();
    });
});

//function toggleVisibility(obj){
//	var el = document.getElementById(obj);

//	if(el.style.display == 'block') {
//		el.style.display = 'none';
//	}

//	else{
//		el.style.display = 'block';
//	}
//}
	
//Load schedular	
		
if(window.addEventListener) { // Mozilla, Netscape, Firefox
    window.addEventListener('load', People, false);

} 
			
else if(window.attachEvent) { // IE
	window.attachEvent('onload', People);
}