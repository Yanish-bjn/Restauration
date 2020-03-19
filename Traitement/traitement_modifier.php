<?php
$modifier = new modifier($_POST["nom"], $_POST["email"], $_POST["mdp"], $_POST["telephone"]); //Enregsitrement des données //
$co = new Manager(); // nouvelle classe //
$co->modifier($modifier);
?>
