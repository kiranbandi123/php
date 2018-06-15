<?php
if (isset($_POST["submitButton"])) {
// (deal with the submitted fields here)
header("Location: 34.php");
exit;
} else {
displayForm();
}
function displayForm() {
?>
<html>


<body>
<h1>Membership Form</h1>
<form action="34.php" method="post">
<div style="width: 30em;">
<label for="firstName">First name</label>
<input type="text" name="firstName" id="firstName" value="" />
<label for="lastName">Last name</label>
<input type="text" name="lastName" id="lastName" value="" />
<div style="clear: both;">
<input type="submit" name="submitButton" id="submitButton" value="Send Details" />
</div>
</div>
</form>
</body>
</html>
<?php
}
?>
