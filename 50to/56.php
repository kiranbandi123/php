<?php
$myString="Here's a little string";
// Displays “Here-s+a+little+string”
echo strtr($myString, " '", "+-" )."<br/>";
?>
