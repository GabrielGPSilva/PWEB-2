<?php
	$valor = $_GET['valor'];
	
	if ($valor % 2 == 0) {
		print 'Par!';
	} else {
		print 'Ímpar!';
	}
?>