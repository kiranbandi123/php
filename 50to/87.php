<?php
$myBook = array("title"=>"The Grapes of Wrath","author"=> "John Steinbeck","pubYear"=>1939);
echo array_shift($myBook)."<br/>"; // Displays “The Grapes of Wrath”
// Displays “Array ( [author] = > John Steinbeck [pubYear] = > 1939 )”
//print_r( $myBook );
?>
