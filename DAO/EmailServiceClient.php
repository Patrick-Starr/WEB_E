<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 01.11.2017
 * Time: 13:52
 */



include_once ("../DAO/Config.php");
require ("../SendGrid/SendGrid-API/vendor/autoload.php");
use SendGrid\Mail;

class EmailServiceClient
{

    public static function sendEmailAttachement($ToEmail, $subject, $htmlData, $pfad){

        $apiKey = Config::get("sendGrid.value");
        $sg = new \SendGrid($apiKey);

        $email = new SendGrid\Email("Me", "$ToEmail");
        $from = new SendGrid\Email("StuKu Support", "noreply@fhnw.ch");


        $mail = new SendGrid\Mail();
        $mail->setFrom($from);
        $mail->setSubject("$subject");
        $p = new \SendGrid\Personalization();
        $p->addTo($email);
        $c = new \SendGrid\Content("text/plain", "$htmlData");
        $mail->addPersonalization($p);
        $mail->addContent($c);

        $att1 = new \SendGrid\Attachment();
        $att1->setContent( base64_encode( file_get_contents("$pfad") ));
        $att1->setType("application/pdf");
        $att1->setFilename("Rechnung");
        $att1->setDisposition("attachment");
        $mail->addAttachment( $att1 );

        $response = $sg->client->mail()->send()->post($mail);

        echo $response->statusCode() . "\n";
        echo json_encode( json_decode($response->body()), JSON_PRETTY_PRINT) . "\n";
        var_dump($response->headers());
    }

    public static function sendEmail($toEmail, $subject, $htmlData){
        $jsonObj = self::createEmailJSONObj();
        $jsonObj->personalizations[0]->to[0]->email = $toEmail;
        $jsonObj->subject = $subject;
        $jsonObj->content[0]->value = $htmlData;

        $options = ["http" => [
            "method" => "POST",
            "header" => ["Content-Type: application/json",
                "Authorization: Bearer ".Config::get("sendGrid.value").""],
            "content" => json_encode($jsonObj)
        ]];
        $context = stream_context_create($options);
        $response = file_get_contents("https://api.sendgrid.com/v3/mail/send", false, $context);
        if(strpos($http_response_header[0],"202"))
            return true;
        return false;
    }



    protected static function createEmailJSONObj(){
        return json_decode('{
          "personalizations": [
            {
              "to": [
                {
                  "email": "email"
                }
              ]
            }
          ],
          "from": {
            "email": "noreply@fhnw.ch",
            "name": "StuKu Support"
          },
          "subject": "subject",
          "content": [
            {
              "type": "text/html",
              "value": "value"
            }
          ]
        }');
    }
}
