<?php 

class Cars{
	static $wheel_count =4;
	static $door_count = 4;

	static function carDetails(){
		echo Cars::$wheel_count;
		echo Cars::$door_count;
	}
}

echo Cars::$door_count . "<br>";
Cars::carDetails();
?>