<?php 
	
	require 'Pessoa.php';

	//objeto
	$p = new Pessoa;
	$p->setNome('Gabriel');
	$p->setIdade(18);

	echo ' nome é '.$p->getNome().' e idade '.$p->getIdade();
?>