<!DOCTYPE html>

<!--
SIM2Wiki by James Bolton.
Distributed under the LGPL
See http://neojames.me/ for more information
-->

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>SIM2Wiki</title>

		<link rel="stylesheet" href="theme/jquery-ui.min.css">
		<link rel="stylesheet" href="theme/jquery-ui.theme.min.css">
		<link rel="stylesheet" href="theme/jquery-ui.structure.min.css">
		<script src="js/jquery-2.1.4.min.js"></script>
		<script defer="defer" src="theme/jquery-ui.min.js"></script>
		<script defer="defer" src="theme/jquery.mousewheel.min.js"></script>
		<script defer="defer" src="js/general.js"></script>
		<script defer="defer" src="js/index.js"></script>
	</head>
	
	<body class="ui-helper-reset" style="margin-left: 5px; margin-right: 5px">
		<p class="ui-widget-header ui-corner-all ui-widget">SIM2Wiki</p>
		
		<form id="form" action="process-advanced.php" method="post" style="width: 90%; margin: 0 auto;">
			<div class="radioSet" style="float: right;">
				<input type="radio" name="people" id="people1" value="0" title="Pretty output with people &amp; format highlighting." checked><label for="people1">Advanced Mode</label>
				<input type="radio" name="people" id="people2" value="1" title="Simple output, with no styling."><label for="people2">Basic Mode</label>
			</div>
			<br><br>
			<div class="ui-widget ui-corner-all ui-helper-reset">
				<textarea name="sim" rows="30" cols="80" class="ui-widget-content" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box; box-sizing: border-box; width:100%;">Enter SIM here.</textarea>
			</div>
			<div id="People" class="ui-widget ui-corner-all ui-helper-reset">
				<p class="ui-widget-header ui-corner-all">People</p>
				<div class="ui-widget-content">
					<p>Here you can provide a list of names to be processed. Names should be entred in the format used by your sims, E.G the Discovery-C used to require names to be in caps, so the charicter James should be entred as JAMES. Also, please don't include the colon (:) otherwise the paraser won't recongnise it.</p>
				
					<h5>Example Input <a href="#" class="toggleVisibility" data-target=".hideable">Show/Hide</a></h5>
					<div class="hideable ui-helper-hidden">
						For the charicters <b>James</b>, <b>Aigle Phos</b>, <b>Seff</b>, and <b>Ezri Fax</b> I would enter:
						<pre>James, Phos, Ezri, Seff</pre>
					</div>
				</div>
				<textarea name="Names" rows="10" cols="80" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;width:100%;"></textarea>
			</div>
			<label for="font" class="ui-widget">Font size (px):</label><input name="font" id="font" type="text" value="12"><span style="float:right;"><input type="submit"></span>
		</form>
		<?php include 'attribution.php'; ?>
	</body>
</html>