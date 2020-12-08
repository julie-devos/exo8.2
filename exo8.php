<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 8-Partie 2</title>
</head>
<body>
<?php
$isOK= rand(0, 1);
?>
<p><?=$isOK." ";?></p>
<?= $isOK==1 ? "C'est bon !!!" : "C'est pas bon !!!";?>

</body>
</html>