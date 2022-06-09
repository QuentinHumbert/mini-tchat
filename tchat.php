<?php
// Réccupération de la requête SQL avec un affichage maximum de 20 messages
$reponse = $bdd->query('SELECT messages_pseudo,DATE_FORMAT(messages_dateM, \'%d/%m/%Y\') AS date,DATE_FORMAT(messages_dateM, \'%Hh%imin%ss\') AS heure,messages_contenu FROM messages ORDER BY messages_dateM DESC LIMIT 0, 20'); ?>


<p>Liste des 20 derniers messages</p>
<div>
<!-- Boucle while pour afficher les messages -->
<?php while ($donnees = $reponse->fetch()) { ?>

<p> Le 
    <span class="date">
    <?php echo $donnees['date'] ?>
    </span> 
    à <span class="heure">
    <?php echo $donnees['heure'] ?></span> - <strong>
    <?php echo $donnees['messages_pseudo'] ?></strong> a posté : 
    <?php echo $donnees['messages_contenu'] ?>
</p>
<?php }

// Libére la connexion au serveur
$reponse->closeCursor(); ?>
</div>