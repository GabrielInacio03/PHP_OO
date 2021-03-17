<?php 
	require 'ContaBancaria.php';
	require 'Pessoa.php';

	$c = new ContaBancaria(123, 456, 999);

	// echo $c->getContaBancaria();

	$p = new Pessoa('Gabriel', $c);

	echo 'Nome: '.$p->getNomePessoa().'<br>';
	echo $p->getConta()->getContaBancaria();
?>