<?php
session_start();
// envoie les données vers les page suiavntes //
require 'model_modifier.php';
require 'traitement_modifier.php';
class Manager{
public function modifier($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', '');
    $req=$bdd->prepare('UPDATE inscription SET nom = :nom, mdp = :mdp, email = :email, telephone = :telephone, WHERE id = :id');
    $req->execute(array('nom'=>$donnee->getnom(), 'mdp'=>md5($donnee->getmdp()), 'email'=>$donnee->getemail(), 'telephone'=>$donnee->gettelephone(), 'id'=>'id'));
    if ($req == true){
      header("location: moncompte.php");
    }
    else{
      header("location: modifier.php");
    }

          }
}
?>
