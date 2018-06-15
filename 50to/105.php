<?php
$myGlobal = "Hello there!";
function hello() {
global $myGlobal;
echo "$myGlobal <br/>";
}
hello(); // Displays “Hello there!”
?>
