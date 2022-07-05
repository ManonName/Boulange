<?php 
ob_start(); 
?>
<!-- form method="POST" action="index.php?page=livres&action=valid-modifier">
        <label for="titre">Titre : </label><br>
        <input type="text" id="titre" name="titre" value="<?= $livre['titre'] ?>"><br>
    
        <label for="nbPages">Nombre de pages : </label><br>
        <input type="number" id="nbPages" name="nbPages" value="<?= $livre['nbPages'] ?>"><br>
   
        <label for="descr">Description : </label><br>
        <input type="text" id="descr" name="descr" value="<?= $livre['description'] ?>"><br>
        <input type="hidden" name="id" value="<?= $livre['id'] ?>">
        <input type="hidden" name="image" value="<?= $livre['image'] ?>">
    
    <button type="submit">Valider</button>
</form -->
<div class="container">
    <form method="POST" action="index.php?page=livres&action=valid-modifier" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label" for="denomination">Titre : </label>
        <input class="form-control" type="text" id="denomination" name="denomination" value="<?= $ordi['denomination'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="processeur">Processeur : </label>
        <input class="form-control" type="text" id="processeur" name="processeur" value="<?= $ordi['processeur'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="prix">Prix : </label>
        <input class="form-control" type="number" step=0.01 id="prix" name="prix" value="<?= $ordi['prix'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="ecran">Ecran : </label>
        <input class="form-control" type="number" id="ecran" name="ecran" value="<?= $ordi['ecran'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="vive">Mémoire vive : </label>
        <input class="form-control" type="text" id="vive" name="vive" value="<?= $ordi['vive'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="lien">Titre : </label>
        <input class="form-control" type="text" id="lien" name="lien" value="<?= $ordi['lien'] ?>">
      </div>
      <input type="hidden" name="id" value="<?= $ordi['id'] ?>">
      <input type="hidden" name="image" value="<?= $ordi['image'] ?>">
      <input class="btn btn-primary" type="submit" value="modifier" name="form_ajouter"/> 
</form>
<?php
$content = ob_get_clean();
$titre = "Modifier l'ordinateur";
require "template.php";
?>