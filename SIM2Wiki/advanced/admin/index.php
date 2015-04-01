<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.me/ for more information
-->

<?php
	if (is_dir("../installer")){ die('Delete installer please!'); }
	require '../configuration.php';
?>
<html>
	<head>
		<title>SIM2Wiki - Advanced - Admin</title>
	</head>
	<body>
		<h4>SIM2Wiki - Advanced - Admin</h4>
		<h5>Add a new person</h5>
		<p><b>Note:</b> Names should be entred in the format used by your sims, E.G on the Discovery-C we require names to be in caps, so my name James should be entred as JAMES. Also, plese don't include the colon (:) otherwise the paraser won't rcongnise it.</p>
		<br />
		<form action="process.php" method="post">
		<input name="name" type="text"> <input value="Add Person" type="submit">
		</form>
		
		<h5>View existing people</h5>
		
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
		<p>SIM2Wiki is made by <a href="http://neojames.allalla.com/">James Bolton</a> and distributed under the <a href="http://www.gnu.org/licenses/lgpl.html">LGPL</a>. SIM2Wiki Version <?php $contents = file("../../version"); $string = implode($contents); print $string; ?> <p>
	</body>
</html>
