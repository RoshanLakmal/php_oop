<?php 

class Cars{
	var $wheel_count = 4;
	var $doorcount =4;

	function carDetails(){
		echo "This car has ". $this->wheel_count."wheels";
	}
}

$bmw = new Cars();
$mercedes = new Cars();

echo $bmw->wheel_count=10;
echo "<br>";
echo $mercedes->wheel_count . "<br>";
echo $mercedes->carDetails() . "<br>";
echo $bmw->wheel_count;
?>