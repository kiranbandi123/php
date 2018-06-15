<?php
class MyClass {
const MYCONST = 123;
public static $staticVar = 456;
public function myMethod() {
echo "MYCONST=".MyClass::MYCONST .",";
echo "\$staticVar=".MyClass::$staticVar."<br/>";
}
}
$obj=new MyClass;
$obj-> myMethod();
?>

<?php
class Car {
public static function calcMpg($miles,$gallons) {
return ($miles/$gallons);
}
public static function displayMpg($miles, $gallons) {
echo "This car’s MPG is:". self::calcMpg($miles, $gallons);
}
}
echo Car::displayMpg(168,6);
?>
