<?php 

class Cars{

	public $wheel_count = 4;
	private $door_count = 4;
	protected $seat_count = 4;

	function car_details(){
		echo $this->wheel_count . "<br>";
		echo $this->door_count . "<br>";
		echo $this->seat_count . "<br>";
	}
}

$bmw = new Cars();
$bmw->car_details();
echo $bmw->wheel_count;
// echo $bmw->door_count; Cannot access private property
// echo $bmw->seat_count; Cannot access protected property
?>