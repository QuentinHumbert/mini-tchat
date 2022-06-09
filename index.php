<?php

// Nécéssité d'être connecté a la base de données pour ouvrir le mini-tchat
require_once 'connexion.php';

// Démarrage de la session
session_start();

// Vérification si il n'y a pas de pseudo dans la variable globale $_SESSION et mise à valeur vide si vrai
if (!isset($_SESSION['pseudo'])) {
    $_SESSION['pseudo'] = '';
}
?>

<!DOCTYPE html>
<html lang="fr">
<!-- Inclus dans la page principale le head HTML -->
<?php include_once 'head.php'; ?>

<body>
    <!-- Formulaire d'identification avec méthode post et en action le fichier de traitement du tchat -->
    <p> Identifier-vous </p>
    <form action="traitementTchat.php" method="post"></form>
    <label for="pseudo">Pseudo : </label>
    <input type="text" name="pseudo" id="pseudo" placeholder="25 caractères max" value="<?php echo $_SESSION['pseudo'] ?>" maxlength="25" onClick="this.value=\'\'" required>
    <label for="message">Message : </label>
    <input type="text" name="message" id="message" placeholder="255 caractères max" maxlength="255" required>
    <input type="submit" value="Envoyer">

<!-- Inclus le tchat dans la page -->
    <?php include_once 'tchat.php'; ?>
</body>

</html>