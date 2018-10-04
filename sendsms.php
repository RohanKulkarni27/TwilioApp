<?php

require __DIR__. '/vendor/autoload.php';
use Twilio\Rest\Client;

$sid    = "AC8b143aad770462f5a97c28779a455a26"; 
$token  = "7b9539071fb8d66b72c18d0afa00abbc"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("+15512259238", // to 
                           array( 
                               "from" => "+18086989616",       
                               "body" => "Hello From Rohan CS643 fall 2018" 
                           ) 
                  ); 
 echo "Message send. Check the device";

?>