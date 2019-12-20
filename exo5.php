<?php
$exercice = "Exercice5";
include "header.php";
$timestampt = time() ;
$timestampMai2016 = mktime(0,0,0,5,16,2016);
$nbjrsdepuisMai2016 = round(($timestampt - $timestampMai2016)/3600/24);
?>
<h3>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</h3>
<p>Le timestamp du jour est : <?= $timestampt ?></p>
<p>Le timestamp du 16 mai 2016 était : <?= $timestampMai2016 ?></p>
<p>le nombre de jour qui nous sépare depuis le 16 mai 2016 est de : <?= $nbjrsdepuisMai2016 ?> jours</p>
</body>
</html>