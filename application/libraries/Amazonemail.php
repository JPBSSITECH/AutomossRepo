<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';

  Class Amazonemail {

      public function __construct(){    

      }

      public function mail($info)
      {

       
      //    $accessKey = "AKIATQPD7JBIP3KAPC24";
      // $secretKey = "s2woiC57hSYYmvapaAWG9/5rFp4NXqHEDeWI2zeF";
      // $region = "us-north-1"; // Change this to your AWS SES region  


          $sender = 'info@automoss.in';
          $senderName = 'automoss.in';
          $usernameSmtp = 'AKIATQPD7JBIP3KAPC24';
          $passwordSmtp = 's2woiC57hSYYmvapaAWG9/5rFp4NXqHEDeWI2zeF';
          $host = 'email-smtp.us-east-1.amazonaws.com';
          $port = 587;


          $recipient = $info['to_email'];
          $subject = $info['subject'];
          $bodyText =  $info['subject'];
          $bodyHtml =  $info['content'];

          $mail = new PHPMailer(true);

          try {

              $mail->isSMTP();
              $mail->setFrom($sender, $senderName);
              $mail->Username   = $usernameSmtp;
              $mail->Password   = $passwordSmtp;
              $mail->Host       = $host;
              $mail->Port       = $port;
              $mail->SMTPAuth   = true;
              $mail->SMTPSecure = 'tls';
              $mail->addCustomHeader('X-SES-CONFIGURATION-SET');

              $mail->addAddress($recipient);

              $mail->isHTML(true);
              $mail->Subject    = $subject;
              $mail->Body       = $bodyHtml;
              $mail->AltBody    = $bodyText;
              $mail->Send();
              $out = "Email sent!";
          } catch (phpmailerException $e) {
              $out = "An error occurred. {$e->errorMessage()}"; //Catch errors from PHPMailer.
          } catch (Exception $e) {
              $out = "Email not sent.... {$mail->ErrorInfo}"; //Catch errors from Amazon SES.
          }


          return $out;
      }

       
           
         
  }
?>