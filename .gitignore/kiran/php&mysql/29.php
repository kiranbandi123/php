<html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for registering. Here is the information you submitted:</p>
<?php
$favoriteWidgets = "";
$newsletters = "";
if ( isset( $_POST["favoriteWidgets"] ) ) {
foreach ( $_POST["favoriteWidgets"] as $widget ) {
$favoriteWidgets .= $widget . ", ";
}
}
if ( isset( $_POST["newsletter"] ) ) {
foreach ( $_POST["newsletter"] as $newsletter ) {
$newsletters .= $newsletter . ", ";
}
}
$favoriteWidgets = preg_replace( "/, $/", "", $favoriteWidgets );
$newsletters = preg_replace( "/, $/", "", $newsletters );
?>
<dl>
<dt>First name</dt><dd><?php echo $_POST["firstName"]?></dd>
<dt>Last name</dt><dd><?php echo $_POST["lastName"]?></dd>
<dt>Password</dt><dd><?php echo $_POST["password1"]?></dd>
<dt>Retyped password</dt><dd><?php echo $_POST["password2"]?></dd>
<dt>Gender</dt><dd><?php echo $_POST["gender"]?></dd>
<dt>Favorite widgets</dt><dd><?php echo $favoriteWidgets?></dd>
<dt>You want to receive the following newsletters:</dt><dd>
<?php echo $newsletters?></dd>
<dt>Comments</dt><dd><?php echo $_POST["comments"]?></dd>
</dl>
</body>
</html>
