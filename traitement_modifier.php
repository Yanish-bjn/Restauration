<?php
$modifier = new modifier($_POST["nom"], $_POST["email"], $_POST["mdp"], $_POST["telephone"]);
$co = new Manager();
$co->modifier($modifier);
?>
