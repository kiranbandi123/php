<html>
	<style>
	span{
		color:red;
	}
	
	</style>
	
	<?php 
	$name=$email=$phone=$g="";
	$nameErr=$emailErr=$phoneErr=$gE="";
	if($_SERVER["REQUEST_METHOD"]=="POST");
	{
		
		if(empty($_POST["name"]))
		{
			$nameErr="*invalid entry";
		}
		else{
			$name=test_input($_POST["name"]);
		}
		
		if(empty($_POST["email"]))
		{
			$emailErr="Invalid Email";
		}
		else
		{
			$email=test_input($_POST["email"]);
		}
		if(empty($_POST["phone"]))
		{
			$phoneErr="Invalid Phone";
		}
		else
		{
			$phone=test_input($_POST["phone"]);
		
	}
	if(empty($_POST["g"]))
	{
		$gE="Gender should not be empty";
	}
	else
	{
		$g=test_input($_POST["g"]);
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
	
	<span><?php echo $nameErr;
	?></span>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
	Name:<input type="text" name="name">
	<span><?php echo $nameErr; ?></span><br>
	
	Email:<input type="email" name="email">
	<span><?php echo $emailErr; ?></span><br>
	
	Phone:<input type="phone" name="phone">
	<span><?php echo $phoneErr; ?></span><br>
	Gender:<br>
	Male:<input type="radio" name="g"><br>
	Female:<input type="radio" name="g">
	<span><?php echo $gE; ?></span>
	
	
	
	<input type="submit">
	</form>
	<?php
	echo "<h1>hello</h1>";
	echo $name."<br>";
	echo $phone."<br>";
	echo $email."<br>";
	echo $g;
	?>
	
	</html>
