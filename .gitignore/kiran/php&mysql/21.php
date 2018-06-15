
<!DOCTYPE html>
<html>
<body>

<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
    
for ($r = 0; $r < 4; $r++) {
  echo "<p><b>Row number $r</b></p>";
  echo "<ul>";
  for ($c = 0; $c < 3; $c++) {
    echo "<li>".$cars[$r ][$c]."</li>";
  }
  echo "</ul>";
}
?>

</body>
</html>
