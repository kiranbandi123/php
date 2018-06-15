<?php
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$newAuthors = array("Hardy", "Melville");
echo array_push( $authors, $newAuthors ) . "<br/>"; // Displays “5”
/*
Displays:
Array
(
[0] = >
[1] = >
[2] = >
[3] = >
[4] = >
(
Steinbeck
Kafka
Tolkien
Dickens
Array
[0] = > Hardy
[1] = > Melville
)
)
*/
print "<pre>";
print_r($authors);
print "</pre>";
?>
