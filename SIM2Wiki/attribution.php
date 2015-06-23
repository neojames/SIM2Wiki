<?php 
//SIM2Wiki by James Bolton.
//Distributed under the LGPL
//See http://neojames.me/ for more information

$contents = file("version");
$string = implode($contents);

echo '<br><br><div id="footer" class="ui-widget-header ui-corner-all ui-widget" style="font-size: small; width:99%; height: 25px; text-align: center;"><a href="https://github.com/neojames/SIM2Wiki">SIM2Wiki</a> is distributed under the <a href="http://www.gnu.org/licenses/lgpl.html">LGPL</a>. SIM2Wiki Version ' . $string . '.<b> Powered by <a href="http://en.wikipedia.org/wiki/Zefram_Cochrane">Zefram Cochrane</a>.</b></div>';
?>