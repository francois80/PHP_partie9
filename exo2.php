<?php
$exercice = "Exercice2";
include "header.php";

?>
<h3>Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</h3>
<p>date = <?= date("d") ?>-<?= date("n") ?>-<?= date("Y") ?></p>
<p>date = <?= date('d-m-Y') ?></p>
</body>
</html>