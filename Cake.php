<?php
class Cake {
	private $height;
	private $radius;
	private $color;
	private $flavor;

	static $count = 0;

	public function __construct($height, $radius, $color, $flavor){
		$this->height = $height;
		$this->radius = $radius;
		$this->color = $color;
		$this->flavor = $flavor;
		// Incrementing of 1 each time an object Cake is created
		self::$count++;  
	}

	// Function to display the objec Cake
	public function __toString() {
		$str = "";
		$str .= "Height: " . $this->height . "<br>";
		$str .= "Radius: " . $this->radius . "<br>";
		$str .= "Color: " . $this->color . "<br>";
		$str .= "Flavor: " . $this->flavor . "<br><br>";

		return $str;
	}

 	// Getters and Setters
 	// Height
	public function setHeight($height) {
		$this->height = $height;
		return $this;
	}

	public function getHeight() {
		return $this->height;
	}

	// Radius
	public function setRadius($radius) {
		$this->radius = $radius;
		return $this;
	}

	public function getRadius() {
		return $this->radius;
	}

	// Color
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	public function getColor() {
		return $this->color;
	}

	// Flavor
	public function setFlavor($flavor) {
		$this->flavor = $flavor;
		return $this;
	}

	public function getFlavor() {
		return $this;
	}


	public static function getCount() {
		return self::$count;
	}



}
?>