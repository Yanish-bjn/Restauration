<?php
class inscription {
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
    if(empty($nom)){
      trigger_error('la variable doit etre un caractere');
      return;
    }
    $this->_nom = $nom;
  }

  public function setemail($email){
    if(empty($email)){
      trigger_error('la variable doit etre un caractere');
      return;
    }
    $this->_email = $email;
  }

  public function setmdp($mdp){
    if(empty($mdp)){
      trigger_error('la variable doit etre un caractere');
      return;
    }
    $this->_mdp = $mdp;
  }

  public function settelephone($telephone){
    if(empty($telephone)){
      trigger_error('la variable doit etre un caractere');
      return;
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
