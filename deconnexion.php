<?php
session_start();
session_destroy(); //destruction de le session //
  header("location: index.php"); //Rédirection vers la page Accueil //
exit;
?>
