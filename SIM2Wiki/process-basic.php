<!DOCTYPE html>

<!--
SIM2Wiki by James Bolton.
Distributed under the LGPL
See http://neojames.me/ for more information
-->

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>SIM2Wiki - Basic - Results</title>

		<link rel="stylesheet" href="theme/jquery-ui.min.css">
		<link rel="stylesheet" href="theme/jquery-ui.theme.min.css">
		<link rel="stylesheet" href="theme/jquery-ui.structure.min.css">
		<script src="js/jquery-2.1.4.min.js"></script>
		<script defer="defer" src="theme/jquery-ui.min.js"></script>
		<script defer="defer" src="js/general.js"></script>
	</head>
	
	<body class="ui-helper-reset" style="margin-left: 5px; margin-right: 5px">
		<p class="ui-widget-header ui-corner-all ui-widget">SIM2Wiki - Basic - Results</p>
		<form style="width: 90%; margin: 0 auto;">
<div class="ui-widget ui-corner-all ui-helper-reset">
<textarea cols="80" rows="30" readonly="yes" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;width:100%;">
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
</div>
			<span style="float:right;"><input type="button" value="Back" onClick="history.go(-1);return true;"></span>
		</form>
		<?php include 'attribution.php'; ?>
	</body>
</html>