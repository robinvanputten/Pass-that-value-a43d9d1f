<?php
function addItemToArray($var_array, $var_item) {
	$var_array[] = $var_item;
	return $var_array;
}

function addItemToArray2(&$var_array, $var_item) {
	array_push($var_array, $var_item);
}

$things_array = ['apple', 'banana', 'pear'];

addItemToArray2($things_array, 'pineapple');
var_dump($things_array);
?>
