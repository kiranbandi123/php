<?php
$myBook = array("title"=>"The Grapes of Wrath",
"author"=>"John Steinbeck",
"pubYear"=> 1939);
echo array_pop( $myBook ) ."<br/>"; // Displays “1939”
// Displays “Array ( [title] = > The Grapes of Wrath [author] = > JohnSteinbeck )”
print_r( $myBook );
?>
