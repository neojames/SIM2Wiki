<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.me/ for more information
-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>SIM2Wiki</title>
		<script type="text/javascript">
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
		</script>
	</head>
	
	<body>
		<h2>SIM2Wiki</h2>
		
		<form id="form" action="process-advanced.php" onsubmit="return OnSubmitForm();" method="post">
			<?php if (file_exists('configuration.php'))
				echo '<input type="radio" name="operation" value="1" checked>Advanced Mode <input type="radio" name="operation" value="2">Basic Mode';
				
				else
				
				echo '<input type="radio" name="operation" disabled="disabled">Advanced Mode <input type="radio" name="operation" value="2" checked>Basic Mode';
			?>
   			<br>
			<textarea name="sim" rows="30" cols="80">Enter SIM here.</textarea>
			<br>
			<span>Font size (px):</span><input name="font" type="text" value="12"><input type="submit">
		</form>
		<?php include 'attribution.php'; ?>
	</body>
</html>
