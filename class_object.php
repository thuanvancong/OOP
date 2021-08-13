<?php 
	/**
	 * 
	 */
	class Cars
	{
		// Properties : Chứa các biến 
		public $name;
		public $color;
		public $price;

		// Methods
		function set_car($name,$color,$price)
		{
			$this->name = $name;
			$this->color = $color;
			$this->price = $price;
		}
		function get_cars()
		{
			return $this->name;
		}
	}

	// Khởi tạo giá trị
	$car = new Cars();
	$car->name = 'abc';
	$car->color = 'xanh';
	$car->price = 10000;
	echo $car->get_cars();
?>