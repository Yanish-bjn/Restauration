<?php

	// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root', '');
$mdp=md5($_POST['mdp']);
$email=('email');

var_dump($_GET);
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
	$b = $req = $bdd->prepare('UPDATE inscription SET mdp = :mdp WHERE email = :email');
	$a = $req->execute(array(
		'mdp' => $mdp,
    'email' => $email
	));

  if ($a ==true){
    header("location: connexion.php");
  }
  else{
    echo 'Erreur';
  }
?> <!------ traitement pour modifier les donner d'une personne---------->
