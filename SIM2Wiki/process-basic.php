<!DOCTYPE html>

<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.me/ for more information
-->

<html lang="en">
	<head>
        <script src="js/jquery-2.1.4.min.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>SIM2Wiki - Basic - Results</title>
	</head>
	
	<body>
		<h2>SIM2Wiki - Basic - Results</h2>
		<form>
<textarea cols="80" rows="30" readonly="yes" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;width:800px;">
<?php
	print "<pre style='font-size:" . $_POST['font'] . "px;'>";
	print "<nowiki>";
	$sim = $_POST['sim']; //Fetches SIM from text box.
	$sim_wrap = wordwrap($sim, 80, "\n"); //Constrains to 80 columns for readability.
	echo stripslashes($sim_wrap); //Removes slashes wordwrap() adds example (James\'s).
	print "</nowiki>";
	print "</pre>"
?>
</textarea>
			<br />
			<input type="button" value="Back" onClick="history.go(-1);return true;">
		</form>
		<?php include 'attribution.php'; ?>
	</body>
</html>
