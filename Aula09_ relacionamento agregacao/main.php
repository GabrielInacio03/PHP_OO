<?php 
	require 'Produto.php';
	require 'Carrinho.php';

	$p1 = new Produto('Caneta', 3);
	$p2 = new Produto('Borracha', 2);

	$c1 = new Carrinho;
	$c1->adcCarrinho($p1);
	$c1->adcCarrinho($p2);

	
	echo 'eCarrinho de Compra <br>';
	foreach($c1->getCarrinho() as $produto)
	{
		echo $produto->getDescricao();
		echo $produto->getValor();
	}
?>