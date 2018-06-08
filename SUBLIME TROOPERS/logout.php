<?php   
session_start(); //démarrer la session
// Détruit toutes les variables de session
$_SESSION = array();
session_destroy(); //detruire la session
header("location: accueil.html"); //redirection vers la page de login
?>