<?php
$myBook = array("title"=>"The Grapes of Wrath","author"=>"John Steinbeck",
"pubYear"=>1939);
$e = each($myBook);
echo "Key:".$e[0]."<br/>";
echo "Value:". $e[1]."<br/>";
echo "Key:".$e["key"]."<br/>";
echo "Value:".$e["value"]."<br/>";
?>
