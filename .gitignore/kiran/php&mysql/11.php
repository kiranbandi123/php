<html>
<body>
<?php 
$name="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=test_input($_POST["name"]);
}
function test_input($data){
	$data=htmlspecialchars($data);
	return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
this <input type="text" name="name">
<br>
<input type="submit" value="submit">
</form>
<?php echo $name;
?>

</body>


</html>
