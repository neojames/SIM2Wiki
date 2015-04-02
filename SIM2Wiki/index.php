<!--
SIM2Wiki by James Bolton.
Distrubuted under the LGPL
See http://neojames.me/ for more information
-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>SIM2Wiki</title>
		<script type="text/javascript" src="js/general.js"></script>
	</head>
	
	<body>
		<h2>SIM2Wiki</h2>
		
		<form id="form" action="process-advanced.php" onsubmit="return OnSubmitForm();" method="post" style="width:800px">
			<input type="radio" name="operation" value="1"  onclick="javascript:People();" checked>Advanced Mode
			<input type="radio" name="operation" value="2" onclick="javascript:People();">Basic Mode';
   			<br><br>
			<textarea name="sim" rows="30" cols="80" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;width:100%;">Enter SIM here.</textarea>
			<br><br>
			<span>Font size (px):</span><input name="font" type="text" value="12"><span style="float:right;"><input type="submit"></span>
			<br><br>
			<div id="People" style="border:1px solid black;width:100%;">
				<h4>People</h4>
				<p>Here you can provide a list of names to be processed. Names should be entred in the format used by your sims, E.G the Discovery-C used to require names to be in caps, so the charicter James should be entred as JAMES. Also, plese don't include the colon (:) otherwise the paraser won't rcongnise it.</p>
				
				<h5>Example Input <a href="#" onclick="toggleVisibility('hideable');">Show/Hide</a></h5>
				<div id="hideable" style="display:none;">
					For the charicters <b>James</b>, <b>Aigle Phos</b>, <b>Seff</b>, and <b>Ezri Fax</b> I would enter:
					<pre>James, Phos, Ezri, Seff</pre>
				</div>
				<textarea name="Names" rows="10" cols="80" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;width:100%;"></textarea>
			</div>
			
		</form>
		<?php include 'attribution.php'; ?>
	</body>
</html>
