<?php
require 'model_inscription.php';
require 'traitement_inscription.php';
class Manager{
public function inscription($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', '');
    $req=$bdd->prepare('INSERT into inscription (nom, email, mdp, telephone, role) VALUES(:nom, :email, :mdp, :telephone, :role)');
    $req->execute(array('nom'=>$donnee->getnom(), 'email'=>$donnee->getemail(), 'mdp'=>md5($donnee->getmdp()), 'telephone'=>$donnee->gettelephone(), 'role'=>'user'));
    $a = $req->fetch();
    if ($a ==true){
      header("location: index.php");
    }
    else{
      header("location: connexion.php");
    }

          }
}

?>
