<?php 
// Cette page permet de nous connecter a la base de données de notre mini-tchat avec en supplément un test de connexion pour
// tester si la connexion a cette base de données est fonctionnel

try{ // Test de connexion a la base de données, si réussis, enregistrement de la valeur
    $connexion = new PDO('mysql:host=localhost;dbname=mini-tchat;charset=utf8', 'root', 'root');
}

catch(Exception $e){ // Si la tentative échoue, renvoyé une erreur
    die('Une erreur est survenu lors de la connexion a la base de données :' . $e->getMessage());
}
