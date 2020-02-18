<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';

require 'model_reservation.php';
require 'traitement_reservation.php';
class Manager{
public function reservation($donnee){

    $bdd=new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', '');
    $req=$bdd->prepare('INSERT into reservation (nom, telephone, heure, menu, personne) VALUES(:nom, :telephone, :heure, :menu, :personne)');
    $req->execute(array('nom'=>$donnee->getnom(), 'telephone'=>$donnee->gettelephone(), 'heure'=>$donnee->getheure(), 'menu'=>$donnee->getmenu(), 'personne'=>$donnee->getpersonne()));
    if ($req == true){
      header("location: index.php");
    }
    else{
      header("location: reservation.php");
    }

          }
}
var_dump($_POST);

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
$mail->setFrom('iliasverif@gmail.com', $donnee->getnom());
$mail->addAddress($donnee->getemail(), 'Bonjour monsieur' $donnee->getnom() 'votre reservation pour' $donnee->getheure() 'a bien était enregistrer');     // Add a recipient //Recipients
 $mail->Body    =   $donnee->getnom();
if(!$mail->Send()) {
   echo "Mailer Error: " . $donnee->getemail()->ErrorInfo;
} else {
   header("location: index.php");
}

}
}
?>