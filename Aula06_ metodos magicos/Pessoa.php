<?php 
	class Pessoa
	{
		//Atributos
		private $nome;
		private $idade;

		public function __construct($name, $age)
		{
			$this->nome = $name;
			$this->idade = $age;
		}
		public function __get($atrib)
		{
			return $this->$atrib;
		}
		public function __set($atrib, $val)
		{
			$this->$atrib = $val;
		}
	}
?>