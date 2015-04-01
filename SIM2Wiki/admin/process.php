<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.me/ for more information
-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<meta charset="UTF-8">
		<title>SIM2Wiki - Advanced - Admin</title>
	</head>
	<body>
		<?php 
			require '../configuration.php';
			$link = mysql_connect($host, $username, $pass);
			$db = mysql_select_db($database, $link);
			
			$input = $_POST['name']; //Get the name that is to be added.
			$query = "INSERT INTO " . $prefix . " (id, name)" . "\t" . "VALUES ('NULL', '" . $input ."')"; //Add the name to the DB, auto gen ID.
			mysql_query($query) or die('Invalid query: ' . mysql_error());
			
			echo ('Sucesfully added :)')
		?>
		
		<FORM><INPUT TYPE="button" VALUE="Back" onClick="window.location.href='index.php'"></FORM>
	</body>
</html>
