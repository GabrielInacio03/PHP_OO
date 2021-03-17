<?php 
	class ContaBancaria
	{
		//atributos
		private $operacao;
		private $agencia;
		private $conta;

		//construct
		public function __construct($oper, $agenc, $cont)
		{
			$this->operacao = $oper;
			$this->agencia = $agenc;
			$this->conta = $cont;
		}

		//getter
		public function getContaBancaria()
		{
			return 'Operação: '.$this->operacao.'<br>Agência: '.$this->agencia.'<br>Conta: '.$this->conta;
		}
	}
?>