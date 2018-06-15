<?php
$authors = array("Steinbeck","Kafka");
$moreAuthors = array("Tolkien","Milton");
// Displays “Array ( [0] = > Steinbeck [1] = > Kafka [2] = > Tolkien [3] = >Milton )”
print_r( array_merge( $authors, $moreAuthors ) );
?>
