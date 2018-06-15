<?php
$mailbox="Inbox";
$totalMessages = 36;
$unreadMessages = 4;
printf(file_get_contents("https://mail.google.com/mail/u/0/#inbox"),$totalMessages,$mailbox,$unreadMessages);
?>
