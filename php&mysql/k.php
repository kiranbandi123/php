
<html>
<head>
<title>php</title>
</head>
<body>
<h2>Aliens Abducted</h2>

<?php 
$when_it_happened = $_Post['whenithappened'];
$how_long = $_post['howlong'];
$alien_description = $_post['description'];
$fang_spotted = $_post['fangspotted'];
$email = $_post['email'];
echo 'Thanks for submitting the form.<br />';
echo 'You were abducted '.$when_it_happened;
echo 'and were gone for '. $how_long .'<br />';
echo 'Describe them: ' . $alien_description . '<br />';
echo 'Was Fang There? '.$fang_spotted.'<br />';
echo 'Your email address is '.$email;

?>


</body>
</html>
