<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.me/ for more information
-->

<?php require 'configuration.php'; ?>
<html>
	<head>
		<title>SIM2Wiki - Advanced - Results</title>
	</head>
	
	<body>
		<h4>SIM2Wiki - Advanced - Results</h4>
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
		<p>SIM2Wiki is made by <a href="http://neojames.allalla.com/">James Bolton</a> and distributed under the <a href="http://www.gnu.org/licenses/lgpl.html">LGPL</a>.<p>
	</body>
</html>
