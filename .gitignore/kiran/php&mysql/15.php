<html>
<style>
.error{
	color:red;
}

</style>

<?php
$name=$last="";
$nameErr=$lastErr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["name"])){
		$nameErr="nAME required";
	}
	else
	{
		$name=test_input($_POST["name"]);
	}
	
	if(empty($_POST["last"]))
	{
		$lastErr="Last name required";
	}
	else
{
	$last=test_input($_POST["last"]);
}

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
NAME: <input type="text" name="name">
<span class="error">*<?php echo $nameErr; ?></span><br>
Last:<input type="text" name="last">
<span class="error">*<?php echo $lastErr; ?></span>

<br>
<input type="submit">
<input type="reset"  />

</form>
<?php echo $name."<br>";
echo $last;
?>
</html>
