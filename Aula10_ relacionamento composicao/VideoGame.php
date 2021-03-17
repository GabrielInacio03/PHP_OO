<?php 
	class VideoGame
	{
		private $brinde;

		public function adcGame($nameGame)
		{
			$this->brinde = new Game($nameGame);
		}
	}
?>