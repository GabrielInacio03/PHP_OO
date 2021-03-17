<?php 
	//chamando classes
	require 'Caneta.php';

	//Criando objeto caneta
	$c = new Caneta;
	$c->cor = 'Vermelho';
	$c->expessura = 1;

	$c->escrever();

	var_dump($c);
?>