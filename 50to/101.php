<html>
<body>
<?php
function makeBold( $text ) {
return "<b> $text </b>";
}
$normalText = "This is normal text.";
$text = makeBold("This is bold text." );
echo "<p> $normalText </p>";
echo "<p> $text </p>";
?>
</body>
</html>
