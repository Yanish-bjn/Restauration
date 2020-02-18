<?php
class contact {
  private $_nom;
  private $_email;
  private $_sujet;
  private $_message;

  public function __construct($nom, $email, $sujet, $message){

      $this->setNom($nom);
      $this->setemail($email);
      $this->setsujet($sujet);
      $this->setmessage($message);
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
public function setsujet($sujet){
  if(empty($sujet)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_sujet = $sujet;
}
public function setmessage($message){
  if(empty($message)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_message = $message;
}
public function getnom(){
  return $this->_nom;
}
public function getemail(){
  return $this->_email;
}
public function getsujet(){
  return $this->_sujet;
}
public function getmessage(){
  return $this->_message;

}
}

?>
