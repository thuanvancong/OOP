<?php 
class Cars 
{
	protected $version;
	public $price;
	public $color;

	function __construct($dongxe, $gia, $mau) 
	{
		$this->version = $dongxe;
		$this->price = $gia;
		$this->color = $mau;
	}

	function card_intro() {
		echo "The fruit is {$this->version} and the color is {$this->color}."; 
	}
}

class Honda extends Cars
{

	function card_intro() {
		echo $this->version;
	}
}

	$honda = new Honda("Card",1000000,"red");
	$honda->card_intro();

?>

 
