<?php
function setup() {
global $myGlobal;
$myGlobal = "Hello World";
}
function hello() {
global $myGlobal;
echo "$myGlobal <br/>";
}
setup();
hello();
?>
