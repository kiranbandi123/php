<?php
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$titles = array("The Grapes of Wrath", "The Trial", "The Hobbit", "A Tale of Two Cities" );
$pubYears = array( 1939, 1925, 1937, 1859 );
array_multisort( $authors, $titles, $pubYears );
// Displays “Array ( [0] = > Dickens [1] = > Kafka [2] = > Steinbeck [3] = > Tolkien )”
print_r ( $authors );
echo "<br/>";
// Displays “Array ( [0] = > A Tale of Two Cities [1] = > The Trial [2] = > The Grapes of Wrath [3] = > The Hobbit )”
print_r ( $titles );
echo "<br/>";
print_r($pubYears);

// Displays “Array ( [0
?>
