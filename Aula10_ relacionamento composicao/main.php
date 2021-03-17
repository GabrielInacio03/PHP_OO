<?php 
	require_once 'Game.php';
	require_once 'VideoGame.php';

	$v = new VideoGame();

	$v->adcGame('Cs Go');
	var_dump($v);
?>