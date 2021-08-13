<?php 
	/**
	 * 
	 */
	class Cars
	{
		public $name;
		public $color;
		public $price;
		function __construct($name,$color,$price)
		{
			$this->name = $name;
			$this->color = $color;
			$this->price = $price;
		}

		function get_name()
		{
			echo $this->name;
		}
	}

	$moto = new Cars('moto','green',10000);
	$moto->get_name();
?>