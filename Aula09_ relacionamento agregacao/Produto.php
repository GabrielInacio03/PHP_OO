<?php 
	class Produto
	{
		private $descricao;
		private $valor;

		public function __construct($desc, $val)
		{
			$this->descricao = $desc;
			$this->valor = $val;
		}

		//gettters
		public function getDescricao()
		{
			return 'Produto: '.$this->descricao.'<br>';
		}
		public function getValor()
		{
			return 'Valor: R$'.$this->valor.'<br>';
		}	
	}
?>