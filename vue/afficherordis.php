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
          <tr class="align-middle">
<!--            <td scope="row"></td>-->
            <td>2500</td>
            <td>Acer M7820</td>
            <td>i7-1800h</td>
            <td>1400</td>
            <td>17"</td>
            <td>16</td>
            <td><img width="80" src="public/images/01.png"></td>
            <td><a href="haha.com">site</a></td>
            <td><a href="index.php?action=lire&id=0" class="btn btn-info">Lire</a></td>
            <td><a href="index.php?action=modifier&id=0" class="btn btn-warning">Modifier</a></td>
            <td><a href="index.php?action=suppr&id=0" class="btn btn-danger">Supprimer</a></td>
          </tr>
      </tbody>
    </table> 
</div>

<?php
    $content=ob_get_clean();
    $titre = "Liste des ordinateurs";
    require "template.php";
?>