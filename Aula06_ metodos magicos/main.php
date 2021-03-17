<?php 
	require 'Pessoa.php';


	$p = new Pessoa('Gabriel', 18);

	echo $p->nome."<br>";
	echo $p->idade;

	//destruindo
	unset($p);

	$p->nome = 'João';

	echo "<br>".$p->nome;
?>