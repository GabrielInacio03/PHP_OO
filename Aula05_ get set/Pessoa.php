<?php 
	
	class Pessoa
	{
		//atributos
		private $nome;
		private $idade;

		//Setters
		public function setNome($name)
		{
			$this->nome = $name;
		}
		public function setIdade($age)
		{
			$this->idade = $age;
		}

		//Getters
		public function getNome()
		{
			return $this->nome;
		}
		public function getIdade()
		{
			return $this->idade;
		}
	}

?>