<?php
$mdp = new mdp($_POST["email"]);
$co = new Manager();
$co->Mail($mdp);
?>
