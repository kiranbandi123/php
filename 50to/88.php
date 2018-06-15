<?php
$authors = array("Steinbeck","Kafka","Tolkien","Dickens");
echo array_push( $authors,"Hardy","Melville")."<br/>"; // Displays “6”
// Displays “Array ( [0] = > Steinbeck [1] = > Kafka [2] = > Tolkien [3] = >Dickens [4] = > Hardy [5] = > Melville )”
print_r( $authors );
?>
