/*<?php/*
function resetCounter($c) {
$c = 0;
}
$counter = 0;
$counter++;
$counter++;
$counter++;
echo "$counter<br/>"; // Displays “3”
resetCounter($counter);
echo "$counter <br/>"; // Displays “3”
?>
<?php
$myVar = 123;
$myRef = & $myVar;
$myRef++;
echo $myRef ."<br/>";
echo $myVar ."<br/>";
?>*/
<?php
function r(&$c ) {
$c = 0;
}
$c = 0;
$c++;
$c++;
$c++;
echo "$c <br/>"; // Displays “3”
r($c);
echo "$c <br/>";
?>
