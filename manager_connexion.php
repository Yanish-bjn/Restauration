<?php
session_start(); //Récupere les données de la session //
require 'model_connexion.php'; // récupére les données de la page //
require 'traitement_connexion.php'; //récupére les données de la page //
class Manager{
public function connexion($donnee){ //function connexion //

      //Code permettant de ce connecter a la BDD et d'enregistrer les données //
      $bdd=new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', '');
    $req=$bdd->prepare('SELECT * from inscription where email = :email and mdp = :mdp');
    $req->execute(array('email'=>$donnee->getemail(), 'mdp'=>md5($donnee->getmdp())));
    $a = $req->fetch();
  if ($a == true){ // début du si //
    $_SESSION['email'] = $donnee->getemail();
    $_SESSION['role'] = $a['role'];
    header("location: index.php"); // redirection vers ... //
  }// fin  du si //
  else{ //début du si non //
    header("location: connexion.php"); // redirection vers la page .... //
  }// fin du si non //
    //header("Location: index.php");
    //$_SESSION['email']=$this->_email;
}



}

?>
