<html>
<head>
<title>Membership Form</title>
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
function setChecked( $fieldName, $fieldValue ) {
if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
echo ' checked="checked"';
}
}
function setSelected( $fieldName, $fieldValue ) {
if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
echo ' selected="selected"';
}
}
function processForm() {
$requiredFields = array("firstName", "lastName", "password1","password2", "gender" );
$missingFields = array();
foreach ( $requiredFields as $requiredField ) {
if ( !isset( $_POST[$requiredField] ) or !$_POST[$requiredField] ) {
$missingFields[] = $requiredField;
}
}
if ( $missingFields ) {
displayForm( $missingFields );
} else {
displayThanks();
}
}
function displayForm( $missingFields ) {
?>

<form action="30.php" method="post">
<label for="firstName"<?php validateField( "firstName",$missingFields ) ?> >First name *</label>
<input type="text" name="firstName" id="firstName" value="<?php setValue("firstName") ?>" /><br>

<label for="lastName"<?php validateField("lastName", $missingFields ) ?>>Last name *</label>
<input type="text" name="lastName" id="lastName" value="<?php setValue("lastName") ?>" /><br>
<label for="password1"<?php if ($missingFields) echo ' class="error"' ?>>Choose a password *</label>
<input type="password" name="password1" id="password1" value="" /><br>
<label for="password2"<?php if ($missingFields) echo ' class="error"' ?>>Retype password *</label>
<input type="password" name="password2" id="password2" value="" /><br>
<label<?php validateField("gender", $missingFields ) ?>>Yourgender: *</label>
<label for="genderMale">Male</label>
<input type="radio" name="gender" id="genderMale" value="M"<?php setChecked("gender", "M" )?>/><br>
<label for="genderFemale">Female</label>
<input type="radio" name="gender" id="genderFemale" value="F"<?php setChecked("gender", "F")?> /><br>
<label for="favoriteWidget">What’s your favorite widget? *</label>
<select name="favoriteWidget" id="favoriteWidget" size="1"><br>
<option value="superWidget"<?php setSelected("favoriteWidget","superWidget") ?>>The SuperWidget</option>

<option value="megaWidget"<?php setSelected("favoriteWidget","megaWidget") ?>>The MegaWidget</option>
<option value="wonderWidget"<?php setSelected("favoriteWidget","wonderWidget") ?>>The WonderWidget</option>
</select><br>
<label for="newsletter">Do you want to receive our newsletter?
</label>
<input type="checkbox" name="newsletter" id="newsletter" value="yes" <?php setChecked("newsletter","yes") ?> />
<br><label for="comments">Any comments?</label>
<textarea name="comments" id="comments" rows="4" cols="50"><?php setValue("comments") ?></textarea><br>
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
}
?>
</body>
</html>
