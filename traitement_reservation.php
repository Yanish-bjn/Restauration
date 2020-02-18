<?php
$reservation = new reservation($_POST["nom"], $_POST["telephone"], $_POST["heure"], $_POST["menu"], $_POST["personne"]);
$co = new Manager();
$co->reservation($reservation);
?>
