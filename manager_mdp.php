<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';

require 'model_mdp.php';
require 'traitement_mdp.php';

class Manager{
public function mdp($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', '');
    $req=$bdd->prepare('SELECT * from inscription where email = :email');
    $req->execute(array('email'=>$donnee->getemail()));
    $a = $req->fetch();
  if ($a == true){

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
    $mail->setFrom('iliasverif@gmail.com', 'Mot de passe oublier'());
    $mail->addAddress($donnee->getemail(), 'Contact');     // Add a recipient //Recipients
     $mail->Body    =   'Bonjour';
    if(!$mail->Send()) {
       echo "Mailer Error: " . $donnee->getemail()->ErrorInfo;
    } else {
       header("location: index.php");
    }


  else{
header("location: mdp_oublier.php");
  }
}
    //header("Location: index.php");
    //$_SESSION['email']=$this->_email;

}


}

?>
