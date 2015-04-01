<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.me/ for more information
-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<?php
	if (is_dir("../installer")){die('Delete installer please!');}
	if (file_exists('../configuration.php')){require '../configuration.php';} else {header('Location: ../installer'); die();}
?>

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>SIM2Wiki - Admin</title>
	</head>
	<body>
		<h2>SIM2Wiki - Advanced - Admin</h2>
		<h4>Add a new person</h4>
		<p><b>Note:</b> Names should be entred in the format used by your sims, E.G the Discovery-C used to require names to be in caps, so the charicter James should be entred as JAMES. Also, plese don't include the colon (:) otherwise the paraser won't rcongnise it.</p>
		<br />
		<form action="process.php" method="post">
		<input name="name" type="text"> <input value="Add Person" type="submit">
		</form>
		
		<h4>View existing people</h4>
		
		<form>
			<table>
				<tr>
					<th>Name</th>
					<th>Delete</th>
				</tr>
				
				<?php
					$link = mysql_connect($host, $username, $pass);
					$db = mysql_select_db($database, $link);
					$link = mysql_connect($host, $username, $pass);
					$data = mysql_query("SELECT * FROM " . $prefix) or die(mysql_error());
					
					while($info = mysql_fetch_array( $data ))
					{
						Print "<tr><td>". $info['name'] . "</td><td><INPUT TYPE='button' VALUE='Delete' onClick=\"window.location.href='delete.php?id=" .$info[id]. "'\"></td></tr>"; //Fetch all of the names in the DB and dissplay them, allong with the relevent delete button.
					}
				?>
			</table>
		</form>
		<?php include '../attribution.php'; ?> SIM2Wiki Version <?php $contents = file("../version"); $string = implode($contents); print $string; ?> <p>
	</body>
</html>
