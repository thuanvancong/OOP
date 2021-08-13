<?php 
	/**
	 * 
	 */
	class Cards
	{
		const XILANH = 3000;

		function dongCo() {
			echo 'Cách 1:'. Cards::XILANH;
			echo '<br>';
			echo 'Cách 2:'. self::XILANH;
		} 
	}

	$xe = new Cards();
	$xe->dongCo();
?>