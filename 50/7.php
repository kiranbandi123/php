<?php
$variable = "name";
$literally = 'My $variable will not print!\\n<br>';
print($literally);
$literally = "My $variable will print!\\n";
print($literally);
?>
