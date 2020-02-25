<?php
class reservation { // classe Réservation reprenant les information du manager, formulaire, model//
  private $_nom;
  private $_email;
  private $_heure;
  private $_menu;
  private $_personne;

  public function __construct($nom, $email, $heure, $menu, $personne){

      $this->setNom($nom);
      $this->settelephone($email);
      $this->setheure($heure);
      $this->setmenu($menu);
      $this->setpersonne($personne);
}

public function setnom($nom){
  if(empty($nom)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_nom = $nom;
}
public function settelephone($email){
  if(empty($email)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_email = $email;
}
public function setheure($heure){
  if(empty($heure)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_heure = $heure;
}
public function setmenu($menu){
  if(empty($menu)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_menu = $menu;
}
public function setpersonne($personne){
  if(empty($personne)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_personne = $personne;
}

public function getnom(){
  return $this->_nom;
}
public function getemail(){
  return $this->_email;
}
public function getheure(){
  return $this->_heure;
}
public function getmenu(){
  return $this->_menu;
}
public function getpersonne(){
  return $this->_personne;
}
}
?>
