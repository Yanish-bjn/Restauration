<?php
// envoie les données vers les page suiavntes //
require '../Model/model_inscription.php';
require '../Traitement/traitement_inscription.php';
class Manager{
public function inscription($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
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
