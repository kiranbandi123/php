<?php
$trigFunctions = array("sin", "cos", "tan");
$degrees = 30;
foreach ($trigFunctions as $trigFunction) {
echo "$trigFunction($degrees) =". $trigFunction( deg2rad( $degrees ))."<br/>";
}
?>
