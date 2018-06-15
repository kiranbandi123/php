<html>
<head>
<title>trail</title>
<meta charset="UTF-8">
<style>
	.error { background: #d33; color: white; padding: 0.2em; }

</style>
</head>
<body>
<?php
if (isset($_POST["submitButton"])) {
processForm();
} else {
displayForm( array() );
}
function validateField($fieldName, $missingFields) {
if (in_array($fieldName, $missingFields)) {
echo ' class="error"';
}
}
function setValue( $fieldName ) {
if (isset($_POST[$fieldName] ) ) {
echo $_POST[$fieldName];
}
}


function processForm() {
$requiredFields = array("firstName");
$missingFields = array();
foreach ( $requiredFields as $requiredField ) {
if (!isset($_POST[$requiredField]) or !$_POST[$requiredField]) {
$missingFields[] = $requiredField;
}
}
if ($missingFields) {
displayForm( $missingFields );
} else {
displayThanks();
}
}
function displayForm( $missingFields ) {
?>

<form action="trail.php" method="post">
<label for="firstName"<?php validateField( "firstName",$missingFields ) ?> >First name *</label>
<input type="text" name="firstName" id="firstName" value="<?php setValue("firstName") ?>" /><br>
<input type="file">
<br>
<input type="submit" name="submitButton" id="submitButton" value="Send Details"/>
<input type="reset"/>
</div>
</div>
</form>
<?php
}
function displayThanks() {
?>
<h1>Thank You</h1>



<p>Thank you, your application has been received.</p>
<?php
$firstName;
}
?>
</body>
</html>
