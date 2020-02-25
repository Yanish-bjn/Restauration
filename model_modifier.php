<?php
class modifier {// classe modifier reprenant les information du manager, formulaire, model//
  private $_nom;
  private $_email;
  private $_mdp;
  private $_telephone;


  public function __construct($nom, $email, $mdp, $telephone){

      $this->setNom($nom);
      $this->setemail($email);
      $this->setmdp($mdp);
      $this->settelephone($telephone);
}

  public function setnom($nom){
    if(empty($nom)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_nom = $nom;
  }

  public function setemail($email){
    if(empty($email)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_email = $email;
  }

  public function setmdp($mdp){
    if(empty($mdp)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_mdp = $mdp;
  }

  public function settelephone($telephone){
    if(empty($telephone)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_telephone = $telephone;
  }

  public function getnom(){
    return $this->_nom;
  }
  public function getemail(){
    return $this->_email;
  }
  public function getmdp(){
    return $this->_mdp;
  }
  public function gettelephone(){
    return $this->_telephone;
  }
}
?>
