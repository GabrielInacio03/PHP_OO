<?php 
	class Carrinho
	{
		private $produtos;

		//indução de tipo
		public function adcCarrinho(Produto $objProd)
		{
			$this->produtos[] = $objProd;
		}
		public function getCarrinho()
		{
			return $this->produtos;
		}
	}
?>