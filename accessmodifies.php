<?php 
	/**
	 * 
	 */
	class Cars
	{
		
		public $name = 1;
		protected $name2 = 2;
		private $name3 = 3;

		function get_name($abc)
		{
			echo $this->name;
			echo $this->name2;
			echo $this->name3;
		}
	}

	$BMW = new Cars();	
	echo $BMW->name;
	// echo $BMW->name2; // Error
	// echo $BMW->name3; // Error
	$BMW->get_name('thuận');
?>
