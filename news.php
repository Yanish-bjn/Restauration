<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';
//
 $email=$_POST['email'];

 $bdd=new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', '');
    $req=$bdd->prepare('SELECT * from inscription where email = :email');
    $req->execute(array('email'=>$email));
    $connexion = $req->fetch();

    $mail = new PHPMailer(true);
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'iliasverif@gmail.com';                     // SMTP username
    $mail->Password   = 'Tamere95';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('iliasverif@gmail.com', 'Newsletter');
    $mail->addAddress($email, 'Contact');     // Add a recipient //Recipients
     $mail->Body    =   'Merci de vous etre inscrit a la Newsletter vous aurait accées à toute les nouveautés nous concernant';
$mail->send();
    if ($connexion ==true){
      header("location: index.php");
    }
    else{
      header("location: cdfe.php");
    }






?>
