<?php
class MyClass {
public $greeting = "Hello, World!";
public function hello() {
echo $this-> greeting;
 }
}
$obj = new MyClass;
$obj-> hello();
?>
