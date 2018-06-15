<html>

<body>
<h1> Understanding variable scope </h1>
<?php
function helloWithVariables() {
$hello = "Hello, ";
$world = "world!";
return $hello . $world;
}
echo helloWithVariables() . "<br/>";
echo "The value of \$hello is: $hello <br/>";
echo "The value of \$world is: $world <br/>";
?>
</body>
</html>
