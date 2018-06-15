<html>
	<?php
	$ca=array(array("s",1,5),array("K",2,10),array("P",3,14));
	for($r=0; $r<4; $r++)
	{
		echo "<p>check that $r</p>";
		echo "<ol>";
		for($c=0; $c<3; $c++)
		{
		echo "<li>".$ca[$r][$c]."</li>";
	}
	echo "</ol>";
}
echo "Today is " . date("l") . "<br>";
?>
	</html>
