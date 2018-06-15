<?php
$authors = array("Steinbeck","Kafka", "Tolkien","Dickens");
foreach ($authors as $val) {
if ($val == "Tolkien") $val ="Hardy";
echo $val ."&nbsp;";
}
echo "<br/>";
?>
