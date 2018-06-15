<?php
$myBook = array("title"=> "The Grapes of Wrath","author"=>"John Steinbeck","pubYear"=> 1939);
while ( list( $key, $value ) = each( $myBook ) ) {
echo "<dt> $key </dt>";
echo "<dd> $value </dd>";
}
?>
