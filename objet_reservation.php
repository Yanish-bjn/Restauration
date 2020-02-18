<?php
class inscription {
  private $_nom;
  private $_telephone;
  private $_heure;
  private $_menu;
  private $_personne;

  public function __construct($nom, $telephone, $heure, $menu, $personne){

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
