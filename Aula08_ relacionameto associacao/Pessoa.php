<?php 
	class Pessoa
	{
		private $nome;
		private $conta;

		public function __construct($nom, $cont)
		{
			$this->nome = $nom;
			$this->conta = $cont;
		}

		public function getNomePessoa()
		{
			return $this->nome;
		}

		public function getConta()
		{
			return $this->conta;
		}
	}
?>