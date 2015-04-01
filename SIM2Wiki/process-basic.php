<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.me/ for more information
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
	<head>
		<title>SIM2Wiki - Basic - Results</title>
	</head>
	
	<body>
		<h2>SIM2Wiki - Basic - Results</h2>
		<form>
<textarea cols="80" rows="30" readonly="yes">
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
