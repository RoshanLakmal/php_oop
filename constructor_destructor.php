<?php 

class Cars{

	public $wheel_count = 4;
	static $door_count = 4;
	function __construct(){
		// echo $this->wheel_count;
		echo self::$door_count++;
	}
	function __destruct(){
		// echo $this->wheel_count;
		echo self::$door_count--;
	}
	function car_details(){
		echo $this->wheel_count . "<br>";
	}
}

$bmw = new Cars();
$mercedes = new Cars();
// echo $bmw->door_count; Cannot access private property
// echo $bmw->seat_count; Cannot access protected property
?>