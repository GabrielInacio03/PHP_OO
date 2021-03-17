<?php 
	require_once 'Pai.php';
	require_once 'Filho.php';
	require_once 'Filha.php';


	$fo = new Filho;
	echo $fo->velocidade().'<br>';

	$fa = new Filha;
	$fa->velocidade().'<br>';
?>