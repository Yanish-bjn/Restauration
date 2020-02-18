<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';
//


require 'model_contact.php';
require 'traitement_contact.php';
class Manager{
public function contact($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', '');
    $req=$bdd->prepare('INSERT into contact (nom, email, sujet, message) VALUES(:nom, :email, :sujet, :message)');
    $req->execute(array('nom'=>$donnee->getnom(), 'email'=>$donnee->getemail(), 'sujet'=>$donnee->getsujet(), 'message'=>$donnee->getmessage()));
    if ($req ==true){
      header("location: index.php");
    }
    else{
      header("location: contact.php");
    }

          }


public function Mail($donnee){
$mail = new PHPMailer();
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'iliasverif@gmail.com';                     // SMTP username
$mail->Password   = 'Tamere95';                               // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
$mail->Port       = 587;                                    // TCP port to connect to

//Recipients
$mail->setFrom('iliasverif@gmail.com', $donnee->getsujet());
$mail->addAddress($donnee->getemail(), 'Contact');     // Add a recipient //Recipients
 $mail->Body    =   $donnee->getmessage();
if(!$mail->Send()) {
   echo "Mailer Error: " . $donnee->getemail()->ErrorInfo;
} else {
   header("location: index.php");
}

}
}
?>
