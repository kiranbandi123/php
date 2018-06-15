<html>
<head>
<link rel="stylesheet" type="text/css" href="common.css"/>
</head>
<body>
<h1> Saying hello with style </h1>
<?php
function helloWithStyle( $font, $size=3.5 ) {
echo "<p style=\"font-family: $font; font-size: {$size}em; border:{px}\"> Hello, world! </p> ";
}
helloWithStyle("Helvetica",2);
helloWithStyle("Times", 3);
helloWithStyle("Courier", 1.5);
helloWithStyle("sans-serif", 1.5);
?>
</body>
</html>
