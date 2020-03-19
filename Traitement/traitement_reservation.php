<?php
$reservation = new reservation($_POST["nom"], $_POST["email"], $_POST["heure"], $_POST["menu"], $_POST["personne"]); //Enregistrement des données
$co = new Manager(); // nouvelles classe //
$co->reservation($reservation);
?>
