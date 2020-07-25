<?php 

class Cars {

	var $wheels = 4;
	function greetings(){
		return "greetings";
	}
}

$bmw = new Cars();

class Trucks extends Cars{

}

$tacom = new Trucks();

echo $tacom->wheels;

?>