<?php
class connexion {
  private $_email;
  private $_mdp;
  private $_role;

  public function __construct($email, $mdp, $role){

      $this->setemail($email);
      $this->setmdp($mdp);
      $this->setrole($role);
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
public function setrole($role){
  if(empty($role)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_role = $role;
}

public function getemail(){
  return $this->_email;
}
public function getmdp(){
  return $this->_mdp;
}
public function getrole(){
  return $this->_role;
}

}
?>
