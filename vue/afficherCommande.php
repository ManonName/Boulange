<?php 
ob_start(); 
?>
<br>
    <a href="index.php?action=supprpanier">Supprimer/payer commande</a><br><br>
    <?php $prixTotal = 0 ?>
    <?php foreach($ordis as $ordi) { ?>     
        <p><?= $ordi['denomination']; ?> X 1 = <?= $ordi['prix']; ?></p>
        <hr>
        <?php $prixTotal += $ordi['prix']; ?>
    <?php } ?>   
    <?php echo "<b>prix total=".$prixTotal."<b>"; ?>

<?php
$content = ob_get_clean();
$titre = "Commande" ;
require "template.php";
?>