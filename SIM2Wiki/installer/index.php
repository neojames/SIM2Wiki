<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.me/ for more information
-->

<html>
	<head>
		<title>SIM2Wiki -Advanced - Installer</title>
	</head>
	
	<body>
		<h2>SIM2Wiki - Advanced - Installer</h2>
		<form action="process.php" method="post">
			<table border="0">
				<tbody>
					<tr>
						<td style="vertical-align: top;"><h5>General</h5></td>
						<td style="vertical-align: top;"><br></td>
					</tr>
					<tr>
						<td style="vertical-align: top;">Site URL (please include trailing slash! Should link directlly to the sim2wiki directory): </td>
						<td style="vertical-align: top;"><input name="url" type="text"></td>
					</tr>
					<tr>
						<td style="vertical-align: top;">Admin area password: </td>
						<td style="vertical-align: top;"><input name="admin" type="password"></td>
					</tr>
					<tr>
						<td style="vertical-align: top;"><br></td>
						<td style="vertical-align: top;"><br></td>
					</tr>
					<tr>
						<td style="vertical-align: top;"><h5>Database</h5></td>
						<td style="vertical-align: top;"><br></td>
					</tr>
					<tr>
						<td style="vertical-align: top;"> Server host (usually localhost):</td>
						<td style="vertical-align: top;"><input name="host" type="text"></td>
					</tr>
					<tr>
						<td style="vertical-align: top;">Database:</td>
						<td style="vertical-align: top;"><input name="database"type="text"></td>
					</tr>
					<tr>
						<td style="vertical-align: top;">Username: </td>
						<td style="vertical-align: top;"><input name="username"type="text"></td>
					</tr>
					<tr>
						<td style="vertical-align: top;">Password:</td>
						<td style="vertical-align: top;"><input name="pass" type="password"></td>
					</tr>
					<tr>
						<td style="vertical-align: top;">Prefix (anything you like! must <b>not</b> end in _ ):&nbsp;</td>
						<td style="vertical-align: top;"><input name="prefix" type="text"></td>
					</tr>
					<tr>
						<td style="vertical-align: top;"><br></td>
						<td style="vertical-align: top;"><br></td>
					</tr>
					<tr>
						<td style="vertical-align: top;"><input type="submit"></td>
						<td style="vertical-align: top;"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>
