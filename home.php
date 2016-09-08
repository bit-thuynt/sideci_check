<?php 

echo "This is home page";
// assign value
$title = "Welcome to this website";
# get menu
$menu = "home_menu";

function getMenuIndex($name){
	if ($name = "home_menu"){
		return 1;
	}
	return 2;
}

function getTotal($a, $b){
	if ($a > 0 && $b > 0){
		return $a + $b;
		
	}
	
	return 0;
}

?>