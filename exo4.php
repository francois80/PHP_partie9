<?php
$exercice = "Exercice4";
include "header.php";

?>
<h3>Afficher le timestamp du jour.<br>
          Afficher le timestamp du mardi 2 août 2016 à 15h00.</h3>
<p>Le timestamp du jour est : <?= time() ?></p>
<p>Le timestamp du 2 août 2016 à 15h00 était : <?= mktime(15,0,0,8,2,2016); ?></p>
</body>
</html>