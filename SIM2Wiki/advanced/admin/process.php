<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.allalla.com/ for more information
-->

<html>
	<head>
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
