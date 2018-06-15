<?php
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$authorsSlice = array_slice( $authors, 1, 2 );  // Displays “Array ( [0] = > Kafka [1] = > Tolkien )”
print_r( $authorsSlice );
?>
