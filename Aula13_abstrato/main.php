<?php 
	require_once 'Animal.php';
	require_once 'Cachorro.php';
	require_once 'Cobra.php';

	$c = new Cachorro;
	$c->organismo()." ".$c->locomover();

	echo "<hr>";

	$c2 = new Cobra;
	$c2->organismo()." ".$c2->locomover();
?>