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
		<title>SIM2Wiki -Advanced - Installer</title>
	</head>
	
	<body>
		<?php
		$error = 0;
		
		//URL
		$url = $_POST['url'];
		$admin = $_POST['admin'];
		
		//Database
		$host = $_POST['host'];
		$database = $_POST['database'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$prefix = $_POST['prefix'] . "_people";
		
		echo("Reading imputed values. <br />");
		
		if (empty($url)){
			echo('Did not enter URL');
			$error++;
			echo('<br />');
		}
		
		if (empty($admin)){
			echo('Did not enter Admin Password');
			$error++;
			echo('<br />');
		}
		
		if (empty($host)){
			echo('Did not enter Host');
			$error++;
			echo('<br />');
		}
		
		if (empty($database)){
			echo('Did not enter Database');
			$error++;
			echo('<br />');
		}
		
		if (empty($username)){
			echo('Did not enter MySQL Username');
			$error++;
			echo('<br />');
		}
		
		if (empty($pass)){
			echo('Did not enter MySQL Password');
			$error++;
			echo('<br />');
		}
		
		if (empty($prefix)){
			echo('Did not enter Prefix');
			$error++;
			echo('<br />');
		}
		
		echo ("Error score for section is: " . $error . "<br /><br />");
		
		if ($error > 0){
			die('Too many errors.');
		}
		
		//Write configeration.php
		
		echo ('Writing configuration.php.<br />');
		
		$file = 'configuration.php';
		$fh = fopen($file, 'w') or die("Can't open configuration.php");
		
		$stringData = '<?php' . PHP_EOL;
		fwrite($fh, $stringData);
		
		$stringData = "\011" . "\$url = '" . $url . "';" . PHP_EOL;
		fwrite($fh, $stringData);
		
		$stringData = "\011" . "\$host = '" . $host . "';" . PHP_EOL;
		fwrite($fh, $stringData);
		
		$stringData = "\011" . "\$database = '" . $database . "';" . PHP_EOL;
		fwrite($fh, $stringData);
		
		$stringData = "\011" . "\$username = '" . $username . "';" . PHP_EOL;
		fwrite($fh, $stringData);
		
		$stringData = "\011" . "\$pass = '" . $pass . "';" . PHP_EOL;
		fwrite($fh, $stringData);
		
		$stringData = "\011" . "\$prefix = '" . $prefix . "';" . PHP_EOL;
		fwrite($fh, $stringData);
		
		$stringData = "?>" . PHP_EOL;
		fwrite($fh, $stringData);
		
		echo ('Section complete - No errors<br /><br />');
		
		//Install database
		
		echo ('Installing database.<br />');
		
		$link = @mysql_connect($host, $username, $pass);
		$db = mysql_select_db($database, $link);
		
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}
		else{
			echo ('Connection esablished.<br />');
		}
		
		if (!$db) {
			die ('Can\'t select database. ' . mysql_error());
		}
		else{
			echo ('Connected to database.<br />');
		}
		
		mysql_select_db($database, $link);
		mysql_query("CREATE TABLE $prefix(
			id INT NOT NULL AUTO_INCREMENT, 
			PRIMARY KEY(id),
			name varchar(15)
		)") or die(mysql_error()); 
		
		echo ('Table created<br />');
		
		mysql_close($link);
		
		echo ('Database installed - No errors.<br /><br />');
		
		//Password protect admin
		
		$fa = fopen('../admin/.htaccess', 'w') or die("Can't open .htaccess");
		$fp = fopen('../admin/.htpasswd', 'w') or die("Can't open .htpasswd");
		$path = str_replace("installer/process.php", "admin/", $_SERVER['SCRIPT_FILENAME']);
		$crypt = crypt($admin, base64_encode($admin));
		
		echo ('Password protecting admin area.<br />');
		
		$stringData = 'AuthUserFile ' . $path . '.htpasswd' . PHP_EOL;
		fwrite($fa, $stringData);
		
		$stringData = 'AuthName "Please Log In"' . PHP_EOL;
		fwrite($fa, $stringData);
		
		$stringData = 'AuthType Basic' . PHP_EOL;
		fwrite($fa, $stringData);
		
		$stringData = 'require valid-user' . PHP_EOL;
		fwrite($fa, $stringData);
		
		$stringData = 'admin:' . $crypt . PHP_EOL;
		fwrite($fp, $stringData);
		echo ('Admin area pasword protected..<br /><br />');
		
		//Finish
		echo ('SIM2 Wiki has successfully installed. Please move configuration.php to the sim2wiki folder then delete the installer directory and then login to the <a href="http://' . $url . '/admin">admin area</a> to add names to be matched. Have a nice day :)');
		?>
	</body>
</html>
