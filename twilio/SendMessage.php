<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>SendMessage</title>
<?php
require_once('/home/briex/www/twilio/Services/Twilio.php');

$AccountSid = "AC6918946550e1b92590e11cb36af09d40";
$AuthToken = "b5bc5c27d31e7b764a0b0bb9d8edb174";
$client = new Services_Twilio($AccountSid, $AuthToken);
$number = "+19172164313";
$client->account->messages->sendMessage("929-229-7120",$number,"Hello from GABRIEL RIBEIRO");
echo "Sent message to $number";
?>
</head>

<body>
</body>
</html>
