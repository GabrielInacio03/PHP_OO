<?php 
	require_once 'IAnimal.php';
	require_once 'Pessoa.php';
	require_once 'Cachorro.php';
	require_once 'Gato.php';

	$dog = new Cachorro;
	$cat = new Gato;
	$p = new Pessoa;

	$p->addEstimacao($dog);
	$p->addEstimacao($cat);
	$p->showEstimacao();

?>