<?php
$myBook = array("title"=>"Bleak House","author"=>"Dickens","year"=>1853);
// Displays “Array ( [author] = > Dickens [title] = > Bleak House [year] = >1853 )”
krsort( $myBook );
print_r( $myBook );
// Displays “Array ( [year] = > 1853 [title] = > Bleak House [author] = >Dickens )”
//krsort( $myBook );
//print_r( $myBook );
?>
