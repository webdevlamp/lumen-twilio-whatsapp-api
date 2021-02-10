<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\TwiML\MessagingResponse;


class WhatsappController extends Controller {

  /**
   * Method to send message
   */
  public function sendMessage(Request $request) {

    // print_r($request->to); // you can check value received in request parameter 
    
    $sid = env("TWILIO_ACCOUNT_SID"); // fetch value of account sid from env file
    $token = env("TWILIO_AUTH_TOKEN"); // fetch value of auth token from env file
    $twilio = new Client($sid, $token); // create twilio client object
 
    // invoke create method to send message
    $message = $twilio->messages->create(
      "whatsapp:".$request->to, // to
      [
        "from" => "whatsapp:+14155238886", // from phone number used as received from sandbox
        "body" => $request->messageBody // actual message to be sent to the desired to phone number
      ]
    );
 
    return $message->sid; // return the unique message sid as response
  
  }

  /**
   * Method to be used as receive message webhook
   */
  public function receiveWebhook(Request $request) {

    // print_r($request); // you can check value received in request parameter 

    // write your logical code to process for the received message from request body parameter

    // acknowledge to the sender as we received their message using webhook
    $response = new MessagingResponse();
    $message = $response->message('');
    $message->body('Hello World!');
    return $response;

  }

}