<?php 
ob_start(); 
?>
<br>
<div class="row">
    <div class="col-4">
        <img  style="width:80%; height:auto" src="public/images/<?= $ordi['image']; ?>">
    </div>
    <div class="col-8">
        <br>
        <h3>Processeur : <?= $ordi['processeur']; ?></h3>
        <br>
        <h3>Prix : <?= $ordi['prix']; ?> euros</h3>
        <br>
        <h3>Caractéristiques :</h3> 
        <p><h3><?= $ordi['vive']; ?> Go de mémoire vive</h3></p>
        <p><h3><?= $ordi['ecran']; ?> " pouces</h3></p>
    </div>
</div>

<?php
$content = ob_get_clean();
$titre = $ordi['denomination'];
require "template.php";
?>