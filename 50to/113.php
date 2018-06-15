<?php
class Car {
    }
$beetle = new Car();
$beetle-> color = "red";
$beetle-> manufacturer = "Volkswagen";

$mustang = new Car();
$mustang-> color ="green";
$mustang-> manufacturer="Ford";

echo "<h2> The \$beetle Object: </h2><pre>";
print_r($beetle);
echo "<pre>";
echo "<h2> The \$mustang Object: </h2><pre>";
print_r($mustang);
echo "</pre>";
?>
