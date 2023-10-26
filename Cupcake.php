<?php
include "Cake.php";

class Cupcake extends Cake {
	private $wrapping;

	static $countCupcake = 0;

public function __construct($height, $radius, $color, $flavor, $wrapping){
	parent:: __construct($height, $radius, $color, $flavor);
	$this->wrapping = $wrapping;
	// Count for cupcakes (child class)
	self::$countCupcake++;  


}


	// Function to display the objec Cake
	public function __toString() {
		$str = "";
		$str .= parent:: __toString();
		$str .= "Wrapping: " . $this->wrapping . "<br><br>";

		return $str;
 	}

 	// Getters and Setters
	// Wrapping
	public function setWrapping($wrapping) {
		$this->wrapping = $wrapping;
		return $this;
	}

	public function getWrapping() {
		return $this;
	}

	public static function getCountCupcake() {
    return self::$countCupcake;
}

}



?>