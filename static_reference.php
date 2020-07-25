<?php 

class Cars{
	static $wheel_count =4;

	static function carDetails(){
		return self::$wheel_count;
	}
}

class Trucks extends Cars{
	static function display(){
		echo parent::carDetails();
	}
}

Trucks::display();
?>