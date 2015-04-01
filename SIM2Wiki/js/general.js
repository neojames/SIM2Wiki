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
	document.getElementByid('additionalPeople').width() = document.getElementByid('sim').style.width();
}
			
if(window.addEventListener) { // Mozilla, Netscape, Firefox
    window.addEventListener('load', AdditionalPeople, false);
   	window.addEventListener('load', TextAreaWidth, false);

} 
			
else if(window.attachEvent) { // IE
	window.attachEvent('onload', AdditionalPeople);
	window.attachEvent('onload', TextAreaWidth);
}