
<form method="post">
    <input placeholder="Enter Number" type="text" name="num"><br>
    <input placeholder="Enter message" type="text"name="msg" ><br>
    <input type="submit">
</form>



<?php
$num=$_POST['num'];
$msg=$_POST['msg'];
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC56d73032543e5e2157307f6662e9e8c4
';
$token = 'd59830848865f2546e9714186857605f';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $num,
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+18509887447',
        // the body of the text message you'd like to send
        'body' => $msg
    )
);

if($message->sid){
    echo "Message Sent";
}

?>