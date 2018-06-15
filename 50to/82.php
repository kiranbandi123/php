<?php
$myBook = array("title"=>"Bleak House","author"=>"Dickens","year"=>1853 );
rsort( $myBook );
// Displays “Array ( [0] = > Bleak House [1] = > Dickens [2] = > 1853 )”
print_r( $myBook );
?>
