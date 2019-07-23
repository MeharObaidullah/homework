<?php
	// class defination

	class Automobile {

		// Properties

		public $color;
		public $make;
		public $speed = 55;

		// Methods

		public function accelerate(){
			$this->speed += 10;
			echo "Accelerating to " . $this->speed. "...<br>";
		}

		public function brake(){
			$this->speed -= 10;
			echo "Slowing Down to " . $this->speed. "...<br>";
		}

		public function turn(){
			$this->brake();
			echo "Turning....";
			$this->accelerate();
		}
	}
?>

<?php
	// instatiate object

	$car = new Automobile;

	// set object Properties

	$car->color = 'Red';
	$car->make = 'Ford Taurus';

	// invoke object methods

	$car->accelerate();
	// $car->brake();
	$car->turn();

	
	// Reflection::export(new ReflectionClass('Automobile'));
?>