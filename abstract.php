<?php
	/**
	 * 
	 */
	abstract class Cars
	{
		public $name;
		public $color;
		public $price;

		function __construct($giaxe)
		{
			$this->price = $giaxe;
		}

		abstract function infor();
		abstract function infor2($color);
		// abstract function infor3() : string;
	}

	class Honda extends Cars
	{
		
		public function infor() {
			echo 'Màu xe '.$this->price.'';
		}
		public function infor2($color) {
			$this->color = $color;
			echo 'Màu xe '.$this->color.'';
		}
	}
	class Yamaha extends Cars
	{
		
		public function infor() {

			echo 'Màu xe '.$this->price.'';
		}
		public function infor2($name) {
			$this->name = $name;
			echo 'Tên xe '.$this->name.'';
		}
	}
	class Suzuki extends Cars
	{
		public function infor()	{
			echo 'Màu xe '.$this->price.'';
		}
		public function infor2($name) {
			$this->name = $name;
			echo 'Tên xe '.$this->name.'';
		}
	}

	$honda = new Honda('20000');
	$honda->infor();
	echo '<br>';
	$honda->infor2('Đen');
	echo '<br>';	 
	$Yamaha = new Yamaha('30000');
	echo '<br>';
	$Yamaha->infor();
	echo '<br>';
	$Yamaha->infor2('Novo');
	echo '<br>';
	$Suzuki = new Suzuki('40000');
	echo '<br>';
	$Suzuki->infor();
	echo '<br>';
	$Suzuki->infor2('xipo');
	echo '<br>';
?>