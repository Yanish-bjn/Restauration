<?php
$inscription = new inscription($_POST["nom"], $_POST["email"], $_POST["mdp"], $_POST["telephone"]); //Enregistrement des données //
$co = new Manager(); // Nouvelles classe //
$co->inscription($inscription);
?>
