<?php
$myNumber = 5;
function & getMyNumber() {
global $myNumber;
return $myNumber;
}
$numberRef = & getMyNumber();
$numberRef++;
echo "\$myNumber = $myNumber <br/>";
// Displays “6”
echo "\$numberRef = $numberRef <br/>";
?>
