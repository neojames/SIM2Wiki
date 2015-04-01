<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.me/ for more information
-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">

<?php require 'configuration.php'; ?>
<html>
	<head>
		<title>SIM2Wiki - Advanced - Results</title>
	</head>
	
	<body>
		<h2>SIM2Wiki - Advanced - Results</h2>
		<form>
<textarea cols="80" rows="30" readonly="yes">
<table width="70%">
<?php
	print "<tr style='font-size:" . $_POST['font'] . "px;'><td>";
	
	$link = mysql_connect($host, $username, $pass);
	$db = mysql_select_db($database, $link);
	$query = "SELECT name FROM " . $prefix . ""; 
	$result = mysql_query($query) or die(mysql_error());
	$names = array();    // Create Arrays for
	$replaces = array(); // text manipulation.
	while($row = mysql_fetch_array($result)){
		$names[] = $row['name'] . ":";				 // Populate
		$replaces[] = "'''" . $row['name'] . "''':"; // Arrays
	}
	
	$sim = $_POST['sim']; //Fetches SIM from text box.
	$sim_wrap = wordwrap($sim, 80, "\n"); //Constrains to 80 columns for readability.
	$sim_penultimate = str_replace("::", "<nowiki>::</nowiki>", $sim_wrap);
	
	$sim_final = str_replace($names, $replaces, $sim_penultimate); // Bold names
	echo stripslashes($sim_final); //Removes slashes wordwrap() adds example (James\'s).
?>

</td></tr></table>
</textarea>
			<br />
			<input type="button" value="Back" onClick="history.go(-1);return true;">
		</form>
		<?php include 'attribution.php'; ?>
	</body>
</html>
