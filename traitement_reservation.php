<?php
$reservation = new reservation($_POST["nom"], $_POST["email"], $_POST["heure"], $_POST["menu"], $_POST["personne"]);
$co = new Manager();
$co->reservation($reservation);
?>
