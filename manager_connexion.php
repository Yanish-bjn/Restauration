<?php
session_start();
require 'model_connexion.php';
require 'traitement_connexion.php';
class Manager{
public function connexion($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', '');
    $req=$bdd->prepare('SELECT * from inscription where email = :email and mdp = :mdp');
    $req->execute(array('email'=>$donnee->getemail(), 'mdp'=>md5($donnee->getmdp())));
    $a = $req->fetch();
  if ($a == true){
    $_SESSION['email'] = $donnee->getemail();
    $_SESSION['role'] = $a['role'];
    header("location: index.php");
  }
  else{
    header("location: connexion.php");
  }
    //header("Location: index.php");
    //$_SESSION['email']=$this->_email;
}



}

?>
