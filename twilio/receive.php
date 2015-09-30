<?php
include('/home/briex/www/twilio/Services/Twilio.php');
 
/* Controller: Match the keyword with the customized SMS reply. */
function index(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Send a message with the keyword HELLO to receive a correct answer!");
    echo $response;
}
 
function hello(){
    $response = new Services_Twilio_Twiml();
    $response->sms("hello from cs6432015 from GABRIEL RIBEIRO.");
    echo $response;
}
/* Read the contents of the 'Body' field of the Request. */
$body = $_REQUEST['Body'];
 
/* Remove formatting from $body until it is just lowercase 
characters without punctuation or spaces. */
$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body);
$result = trim($result);
$result = strtolower($result);

If ($result == 'hello')
        hello();
else	
        index();

?>