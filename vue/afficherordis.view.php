<?php ob_start()?>

<div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Dénomination</th>
          <th scope="col">Processeur</th>
          <th scope="col">Prix</th>
          <th scope="col">Ecran</th>
          <th scope="col">Mémoire vive</th>
          <th scope="col">Image</th>
          <th scope="col">Lien</th>         
          <th scope="col" colspan="3">Actions</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($tabOrdis as $ordi) { ?>
          <tr class="align-middle">
            <td scope="row"><?php echo $ordi['id']; ?></td>
            <td><?php echo $ordi['denomination']; ?></td>
            <td><?php echo $ordi['processeur']; ?></td>
            <td><?php echo $ordi['prix']; ?></td>
            <td><?php echo $ordi['ecran']; ?></td>
            <td><?php echo $ordi['vive']; ?></td>
            <td><img width="80" src="public/images/<?php echo $ordi['image']; ?>"></td>
            <td><a href="<?php echo $ordi['lien']; ?>">site</a></td>
            <td><a href="index.php?action=lire&id=<?= $ordi['id']; ?>" class="btn btn-info">Lire</a></td>
            <td><a href="index.php?action=modifier&id=<?= $ordi['id']; ?>" class="btn btn-warning">Modifier</a></td>
            <td><a href="index.php?action=suppr&id=<?= $ordi['id']; ?>" class="btn btn-danger">Supprimer</a></td>
          </tr>
          <?php } ?>
      </tbody>
    </table> 
</div>

<?php
    $content=ob_get_clean();
    $titre = "Liste des ordinateurs";
    require "template.php";
?>