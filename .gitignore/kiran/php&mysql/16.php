<html>
	<style>
	span{
		color:red;
	}
	
	
	</style>
<?php
$name=$email="";
$nameErr=$emailErr="";
if($_SERVER["REQUEST_METHOD"]=="POST");

{
	
	if(empty($_POST["name"]))
	{
		$nameErr="nAME REQUIRED";
		
	}
	else
	{
		$name=test_input($_POST["name"]);
	}
	
	if(empty($_POST["email"]))
	{
		$emailErr="Invalid email";
	}
	else
	{
		$email=test_input($_POST["email"]);
	}
	
	
}
function test_input($data)
{
	$data=trim($data);
	$data=htmlspecialchars($data);
	$data=stripcslashes($data);
	return $data;
}
?>
<form method="POST" action="<?php echo htmlspecialchars($SERVER["PHP_SELF"]); ?> ">
NAME:<input type="text" name="name">
<span>* <?php echo $nameErr; ?></span><br>
Email: <input type="email" name="email">
<span>*<?php echo $emailErr; ?></span>

<input type="submit">
</form>
 <?php
 echo "<h4>Name:$name.</h4>"."<br>";
 echo "<h4>Email:$email.</h4>"."<br>";
 ?>



</html>
