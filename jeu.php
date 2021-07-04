<?php
$aDeviner = 150;
require 'header.php';
?>

<?php if ($_GET['chiffre'] > $aDeviner): ?>
    Votre chiffre est trop grand 
<?php elseif ($_GET['chiffre'] < $aDeviner): ?>
    Votre chiffre est trop petit
<?php else: ?>
    Bravo ! Vous avez deviné le chiffre exact ! <?= $aDeviner ?>
<?php endif ?>

<form action="/jeu.php" method="GET">
    <input type="number" name="chiffre" placeholder="Entre 0 et 1000" value="<?= htmlentities($_GET['chiffre']) ?>">
    <button type="submit">Devine !</button>
</form>

<? require 'footer.php' ?>
