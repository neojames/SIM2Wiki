<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.me/ for more information
-->

<html>
	<head>
		<title>SIM2Wiki - Advanced - Admin</title>
	</head>
	<body>
		<?php
			
			require '../configuration.php';
			
			$delete = $_GET['id']; //Get the ID of the user that is to be deleted.
			$link = mysql_connect($host, $username, $pass);
			$db = mysql_select_db($database, $link);
			$link = mysql_connect($host, $username, $pass);
			
			mysql_query("DELETE FROM " . $prefix . " WHERE id='" . $delete ."'") or die(mysql_error());
			echo ('Sucesfully removed :)')
		?>
		
		<FORM><INPUT TYPE="button" VALUE="Back" onClick="window.location.href='index.php'"></FORM>
	</body>
</html>