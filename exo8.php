<?php
$exercice = "Exercice8";
include "header.php";
//date du jour  - 22 jours
$timestamp = time()-22*24*3600; 
$mois = [1 => "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre",
                "octobre", "novembre", "décembre"];
$jourSemaine = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
?>
<h3>Afficher la date du jour - 22 jours</h3>
<p>date du jour = <?= date("d") ?>/<?= date("n") ?>/<?= date("Y") ?></p>
<p>il y a 22 jours, nous étions le : <?= date("l d F Y", time()-22*3600*24) ?></p>
<!-- Affichage de la date en français -->
<p><?= $jourSemaine[date("w",$timestamp)] ?> <?= date("j",$timestamp) ?> <?= $mois[date("n",$timestamp)] ?> <?= date("Y",$timestamp) ?></p>
</body>
</html> -