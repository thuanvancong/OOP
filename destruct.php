<?php 
	/**
	 * 
	 */
	class Cars
	{
		function __construct($name)
		{
			$this->name = $name;
		}

		function xehoi()
		{
			$this->name = 'đã thay đổi name thành abc';
		}

		function __destruct()
		{
			echo $this->name;
		}
	}

	$car =  new Cars('moto');
	$car->xehoi();
?>