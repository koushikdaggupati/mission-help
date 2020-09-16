<?php
// the message
$msg ="hi man";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = 'From: koushikdaggupati@gmail.com>' . "\r\n";
// send email
mail("dagg17cs018@rmkcet.ac.in","first",$msg, $headers);
?>