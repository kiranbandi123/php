<?php
class Car {
public $color;
}
class Garage {
public function paint( $car, $color ) {
$car->color = $color;
}
}
$car=new Car;
$garage=new Garage;
$car->color="blue";
$garage->paint($car,"green");
echo $car->color;
?>
