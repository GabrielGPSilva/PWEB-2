<?php
	$c = $_GET['celsius']; 
	$f = 1.8 * $c + 32;
	
	print 'Temperatura em Fahrenheit:' . $f;
?>