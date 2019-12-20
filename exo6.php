<?php
$exercice = "Exercice6";
include "header.php";
$timestampt = time() ;
$dateFev2016 = mktime(0,0,0,2,1,2016); // secondes depuis le 1er février 2016
$datemars2016 = mktime(0,0,0,3,1,2016);//secondes depuis le 1er mars 2016
$nbjoursFevrier2016 = round($datemars2016 -$dateFev2016 )/3600/24 //nb de jours entre février et mars 2016
?>
<h3>Afficher le nombre de jour dans le mois de février de l'année 2016.</h3>
<p>$dateFev2106 = <?= $dateFev2016  ?></p>
<p>nombre de jours pour le mois de février 2016 :  <?= $nbjoursFevrier2016 ?> jours</p>
</body>
</html>