<?php
require_once "./outil/outils.php";
require_once "./model/OrdiManager.php";


function afficherAccueil(){
    require "vue/accueil.php";
    
}

//Affiche la liste des ordinateurs dans l'onglet Administration.
function afficherOrdis(){
    $tabOrdis= lireOrdis();    
    require "vue/afficherordis.php";
}

//Fonction qui affiche les caractéristiques d'un ordinateur en particulier dans Administration
function afficherOrdi($id){
    $ordi=lireOrdiById($id);
    require "vue/afficherordi.php";
}

function supprimerOrdi($id){
    supprimerOrdiBD($id);
    $ordi=lireOrdiById($id);
    header("Location: index.php?action=tab");
}

function creerOrdi(){
    require "vue/formulaireordi.php";
}

function creerValidationOrdi(){
    $file = $_FILES['image'];
    $repertoire = "public/images/";
    $nomImageAjoute = ajouterImage($file,$repertoire);
    ajouterOrdiBd($_POST['denomination'],$_POST['prix'],$_POST['processeur'], $_POST['ecran'], $_POST['vive'], $nomImageAjoute,$_POST['lien']);
    header("Location: index.php?action=tab");   
}


function afficherCardOrdis(){
            $tabOrdis=lireOrdis();
            require "vue/cardOrdis.php";
}

function modifierOrdi($id){
    echo "Modifier ORDI id=".$id."<br>";
    $ordi=lireOrdiById($id);
    require "vue/modifierordi.php";
}

function modifiervalidationOrdi(){
    afficherTableau($_POST,"POST");
    echo "Modifier VALIDATION ORDI id<br>";
    modificationOrdiBD($_POST['id'],$_POST['denomination'], $_POST['processeur'],$_POST['prix'],$_POST['ecran'],$_POST['vive'], $_POST['image'], $_POST['lien']);
    header("Location: index.php?action=tab");
}

function ajouterOrdiPanier($id){
    echo "controleur ajouerterOrdiPanier id=".$id;
    if(!isset($_SESSION['ordis'])){
        $_SESSION['ordis'] = array();
     }
     if(in_array($id, $_SESSION['ordis'])){
         echo $id." est déjà commandé<br>";
     }
         else {
             $_SESSION['ordis'][]=$id;
     }
     afficherTableau($_SESSION['livres'],"SESSION['ordis']");
     header("Location: index.php?action=card");
        
}

function afficherCommande(){
    foreach($_SESSION['ordis'] as $id){
        $ordis[]=lireOrdiById($id);
    }
    if(isset($ordis)){
        if(count($ordis) > 0)
            require "vue/afficherCommande.php";
    }
    else //echo "La commande est vide<br>";
        header("Location: index.php?action=card");
}

function supprimerCommande(){
    $_SESSION['ordis'] = array();
    afficherTableau($_SESSION,"controleur - supprimerCommand _SESSION");
    header("Location: index.php?action=card");
}

?>