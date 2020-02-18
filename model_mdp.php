<?php
class mdp {
  private $_email;

  public function __construct($email){

      $this->setemail($email);
}

public function setemail($email){
  if(empty($email)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_email = $email;
}

public function getemail(){
  return $this->_email;
}

}
?>
