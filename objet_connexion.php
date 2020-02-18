<?php
class connexion {
  private $_email;
  private $_mdp;

  public function __construct($email, $mdp){

      $this->setemail($email);
      $this->setmdp($mdp);
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

public function getemail(){
  return $this->_email;
}
public function getmdp(){
  return $this->_mdp;
}

}
?>
