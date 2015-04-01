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
			
function AdditionalPeople(){
	if(document.getElementById('form').operation[0].checked == true){
		document.getElementById('additionalPeople').style.display = 'block';
}
				
	else
				
	if(document.getElementById('form').operation[1].checked == true){
		document.getElementById('additionalPeople').style.display = 'none';
	}
}
		
function TextAreaWidth(){
	document.getElementByid('additionalPeople').width() = document.getElementByid('form').style.width();
}
			
if(window.addEventListener) { // Mozilla, Netscape, Firefox
    window.addEventListener('load', AdditionalPeople, false);

} 
			
else if(window.attachEvent) { // IE
	window.attachEvent('onload', AdditionalPeople);
}