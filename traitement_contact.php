<?php
$contact = new contact($_POST["nom"], $_POST["email"], $_POST["sujet"], $_POST["message"]); // enregsitrement des données //
$co = new Manager(); // nouvelles classe //
$co->Mail($contact);
?>
