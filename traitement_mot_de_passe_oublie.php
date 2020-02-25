<?php
session_start();
$mailto = $_POST['email'];
$_SESSION['email']=$_POST['email'];
try {
  $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
}
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}
$req = $bdd->prepare('SELECT * FROM inscription WHERE mail=:mail');
$req->execute(array('email'=>$mailto));
$connexion = $req->fetch();
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'iliasverif@gmail.com';                     // SMTP username
    $mail->Password   = 'Tamere95';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('iliasverif@gmail.com', 'Yanish');
    $mail->addAddress($mailto);     // Add a recipient
if(isset($connexion)){
  if(isset($mail)){
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Modification de mot de passe';
    $mail->Body    = "<a href='http://localhost/Restauration/récuperation_mdp.php'>Réinitialiser mot de passe</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail client';
    $mail->send();
    header("location: index.php");

}
}
else{
  header("Location: ../vu/mot_de_passe_oublie.php");
}
}
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 ?>
