<?php
require 'model_modifier.php';
require 'traitement_modifier.php';
class Manager{
public function modifier($donnee){

      $bdd=new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', '');
    $req=$bdd->prepare('UPDATE inscription SET nom = :nom, mdp = :mdp, email = :email, telephone = :telephone, WHERE id = :id');
    $req->execute(array('nom'=>$donnee->getnom(), 'mdp'=>md5($donnee->getmdp()), 'email'=>$donnee->getemail(), 'telephone'=>$donnee->gettelephone(), 'id'=>'id'));
    $a = $req->fetch();
    var_dump($a);

    //if ($a == true){
      //header("location: moncompte.php");
    //}
    //else{
      //header("location: modifier.php");
    //}

          }
}
?>
