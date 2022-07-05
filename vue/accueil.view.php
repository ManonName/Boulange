<?php ob_start()?>

<!-- "Bonjour à tous, page accueil - ob_start"; -->
<!--  <h1>Page d'accueil</h1> -->
<h3>Boulanger, École Pratique... Qui sont-ils ?</h3>
<p>
Boulanger est le spécialiste des équipements de la maison en électroménager et multimédia. Notre offre de 25 000 références regroupe les indispensables du quotidien.

Nous mettons tout notre savoir-faire au service de nos clients, grâce à nos marques exclusives et nos nombreux services d’accompagnement comme la livraison dans l’heure à Paris, 
la livraison le lendemain dans toute la France, l’accompagnement 7j/7, la mise en service, le dépannage, l’aide à la prise en main à distance ou à domicile, l’abonnement, la location 
et les offres de produits reconditionnés. </p>
<div class="conteneur-ligne">
    <div class="element">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/3sGS8fKVwSo" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
    <div class="element">
        <p>
        L'École Pratique forme des futurs collaborateurs dans les domaines de la gestion d'entreprise PME-PMI, 
        du management, et de l'organisation. Découvrez nos formations en apprentissage à Marseille de cette filière.
        </p>
    </div>
</div>
<h3>Partenariat</h3>
<div class="conteneur-ligne">
    <div class="element">
        <p>
        Première institution chargée de la collecte du dépôt légal, à partir de 15371, elle est la plus importante bibliothèque de France et l’une des plus importantes au monde. Elle a le statut d’établissement public à caractère administratif. Ses activités sont réparties sur sept sites, dont le principal est la bibliothèque du site François-Mitterrand ou Tolbiac, située dans le 13e arrondissement de Paris, sur la rive gauche de la Seine. Le site historique, datant du XVIIe siècle, qui occupe désormais un îlot entier, se trouve dans le 2e arrondissement de Paris, sur le lieu du palais Mazarin qui hébergeait également la Bourse de Paris au XVIIIe siècle. On a coutume de le nommer « quadrilatère Richelieu », du nom de la rue de son entrée principale.

        La Bibliothèque nationale de France comporte quatorze départements et plusieurs collections principalement conservées sur ses quatre sites parisiens, y compris le Département des monnaies, médailles et antiques, héritier du Cabinet des Médailles. L'ensemble des collections représente environ 40 millions de documents imprimés et spécialisés. 
        L'ensemble des collections représente environ 40 millions de documents imprimés et spécialisés. L'ensemble des collections représente environ 40 millions de documents imprimés et spécialisés. 
        </p>
    </div>
    <div class="element">
        <iframe width="560" height="315" 
            src="https://www.youtube.com/embed/7DKn1Ltjccc" title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
</div>
<h3>Partenariat</h3>
<p>
    L'École Pratique et Boulanger ce sont associés pour créer un 
</p>
<?php
    $content=ob_get_clean();
    $titre = "Page d'accueil";
    require "template.php";
?>