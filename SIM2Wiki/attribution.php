<?php 
//SIM2Wiki by James Bolton.
//Distrubuted under the LGPL
//See http://neojames.me/ for more information

echo '<p><a href="https://github.com/neojames/SIM2Wiki">SIM2Wiki</a> is distributed under the <a href="http://www.gnu.org/licenses/lgpl.html">LGPL</a>. Version SIM2Wiki Version <?php $contents = file("version"); $string = implode($contents); print $string; ?> <b>Powered by <a href="http://en.wikipedia.org/wiki/Zefram_Cochrane">Zefram Cochrane</a>.</b><p>';
?>