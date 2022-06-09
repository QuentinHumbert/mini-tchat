<?php
session_start();    // Lancement de la session
require_once 'connexion.php';   // Néccésité de ce connecté a la base de données

$_SESSION['pseudo'] = strip_tags ($_POST['pseudo']); // Retire tout les balises HTML, PHP et XML

// Créer la requête SQL et la garde sous un format illisible pour le PHP
$req = $bdd->prepare('INSERT INTO messages (messages_pseudo, messages_dateM, messages_contenu) VALUES(?,NOW(),?)');  
// Réccupére les données de la requête et la transforme en format lisible
$req->execute(array($_SESSION['pseudo'], strip_tags($_POST['message'])));

// Redirection vers la page du tchat
header('location: index.php');
?>