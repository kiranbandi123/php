<?php
$fruitArray = array("apple", "pear", "banana","strawberry","peach");
$fruitString = explode( ",", $fruitArray );
$fruitString = implode( ",", $fruitArray );
// Displays “apple,pear,banana,strawberry,peach”
echo $fruitString;
?>
