<?php
$myString="Hello, world!";
echo strstr($myString,"wor")."<br/>";
// Displays ‘world!’
echo ( strstr($myString,"xyz")?"Yes":"No")."<br/>"; // Displays ‘No’
?>
