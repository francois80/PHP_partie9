<?php
$exercice = "Exercice7";
include "header.php";
//timestamp du jour + 20 jours
$timestamp = time()+20*24*3600; 
$mois = [1 => "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre",
                "octobre", "novembre", "décembre"];
$jourSemaine = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
?>
<h3>Afficher la date du jour + 20 jours</h3>
<p>date du jour = <?= date("d") ?>/<?= date("n") ?>/<?= date("Y") ?></p>
<p>dans 20 jours, nous serons le : <?= date("l d F Y", time()+20*3600*24) ?></p>
<!-- ci-dessous affichage de la date en français -->
<p><?= $jourSemaine[date("w",$timestamp)] ?> <?= date("j",$timestamp) ?> 
        <?= $mois[date("n",$timestamp)] ?>  <?= date("Y",$timestamp) ?>
</p>
</body>
</html>
