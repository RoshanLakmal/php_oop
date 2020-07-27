<?php 

echo __FILE__ . "<br>";
echo __LINE__ . "<br>";
echo __DIR__ . "<br>";

if(file_exists(__FILE__)){
	echo "Yes" . "<br>";
}

if(file_exists(__DIR__)){
	echo "Yes" ."<br>";
}

if(is_file(__DIR__)){
	echo "Yes" ."<br>";
}else{
	echo "no" . "<br>";
}

if(is_file(__FILE__)){
	echo "Yes" ."<br>";
}else{
	echo "no" . "<br>";
}

if(is_dir(__FILE__)){
	echo "Yes" ."<br>";
}else{
	echo "no" . "<br>";
}

echo file_exists(__FILE__) ? "yes" : "no";
?>