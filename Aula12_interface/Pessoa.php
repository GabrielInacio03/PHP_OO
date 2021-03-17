<?php 
	class Pessoa
	{
		//atributos
		private $estimacao;

		public function addEstimacao(IAnimal $objAnimal)
		{
			$this->estimacao[] = $objAnimal->getAnimal();
		}
		public function showEstimacao()
		{
			echo 'Animais de Estimação <br>';
			foreach($this->estimacao as $estim)
			{
				echo $estim.'<br>';
			}
		}
	}
?>