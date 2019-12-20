<?php
$exercice = "Exercice3";
include "header.php";
setlocale(LC_TIME, "fr_FR.utf-8");
$francais = strftime(" %A %d %B %G", time());
$lang = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
?>
<h3>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
Bonus : Le faire en français.</h3>
<p>réccupérattion de la date server : <?= date("l, d F Y") ?></p>
<p><?= $francais ?></p>
<p>language = <?= $lang ?></p>
<?php
$jour = getdate();
$mois = [1 => "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre",
                "octobre", "novembre", "décembre"];
$jourSemaine = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
?>
<p><?= $jourSemaine[$jour["wday"]] ?> <?= $jour["mday"] ?> <?= $mois[$jour["mon"]] ?> 
        <?= $jour["year"] ?></p>
<p>$jour = <?= var_dump($jour) ?></p>
</body>
</html>