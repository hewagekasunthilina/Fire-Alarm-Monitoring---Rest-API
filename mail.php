<?php
// the message
$msg = "First line of text\nSecond line of text".print_r($_POST);

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("kasunthilina1000@gmail.com","My subject",$msg);
echo "send".print_r($_POST);
?>