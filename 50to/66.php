<?php
//word wrap
$myString = "But think not that this famous town has only harpooneers,
cannibals, and bumpkins to show her visitors. Not at all. Still New Bedford
is a queer place. Had it not been for us whalemen, that tract of land would
this day perhaps have been in as howling condition as the coast of
Labrador.";
echo "<pre>";
echo wordwrap ( $myString, 40, " <br> ",true );
echo "</pre>";
?>
