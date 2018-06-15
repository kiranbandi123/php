<?php
for ( $tens = 0; $tens < 10; $tens++ ) {
for ( $units = 0; $units < 10; $units++ ) {
if ( $units == 5 ) break 2;
echo $tens . $units . "<br/>";
}
}
?>
