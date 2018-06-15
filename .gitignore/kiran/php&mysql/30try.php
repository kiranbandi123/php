<html>
<style>
.error
{
	background:red;
	color:white;
}

</style>
<?php
if(isset($_POST["submitButton"]))
{
	processForm();
}
else
{
	displayForm(array());
}

function validateField($fieldName, $missingFields)
{
	if(in_array($fieldName, $missingFields))
	{
		echo 'class="error"';
	}
}
function setValue($fieldName){
	if(isset($_POST[$fieldName])){
		echo $_POST[$fieldName];
	}
}
function processForm(){
	$requiredFields=array("firstName");
	$missingFields=array();
	foreach($requiredFields as $requiredField){
		if(!isset($_POST[$requiredField]) or !$_POST[$requiredField])
		{
			$missingFields[]=$requiredField;
		}
	}
	if($missingFields){
		displayForm($missingFields);
	}
	else
	{
		displayThanks();
	}
}
function displayForm($missingFields){
	?>

<form action="30try.php" method="post">
<label for="firstName"<?php validateField("firstName", $missingFields)?>>firstName</label>
<input type="text" name="firstName" value="<?php setValue("firstName") ?> "/>
<input type="file">
<input type="submit" name="submitButton">
</div>
</div>
</form>
<?php
 }
function displayThanks(){
	?>
	<h1>thanks ->> KIRAN  <<- </h1>
	<?php
}
	?>
	</html>
