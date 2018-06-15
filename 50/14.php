<?php
$test_var = 8.23;
echo $test_var . "<br/>2)";

settype( $test_var, "string");
echo $test_var . "<br/>3)";

settype( $test_var, "integer" );
echo $test_var . "<br/>4)
.";

settype( $test_var, "float");
echo $test_var . "<br/>5)";

settype( $test_var, "boolean");
echo $test_var . "<br/>";
?>
