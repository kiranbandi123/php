		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<?php
$name="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["a"]);
}
  echo "Thank You for submitting";

?>

<h1>happy</h1>
