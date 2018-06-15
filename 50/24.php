<html>
<?php
$x =2;
$y =3;
echo(($x>1) & & ($x < 5))."<br>";
echo(($x==2)or($y == 0))."<br>"; // Displays 1 (true)
echo(($x==2)xor($y==3))."<br>"; // Displays “” (false) because both
echo(!($x==5))."<br/>";
?>
</html>
