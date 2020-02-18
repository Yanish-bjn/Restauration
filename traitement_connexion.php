<?php
$connexion = new connexion($_POST["email"],$_POST["mdp"],$_POST['role']);
$co = new Manager();
$co->connexion($connexion);
?>
