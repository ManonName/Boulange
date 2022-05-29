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
    echo "On est dans afficherCardOrdis";
}

function modifierOrdi($id){
    echo "On est dans modifierOrdi";
}

function modifierValidationOrdi(){
    echo "On est dans modifierValidationOrdi.";
}

function ajouterOrdiPanier($id){
    echo "On est dans ajouterOrdiPanier.";
}

function afficherCommande(){
    echo "On est dans afficherCommande.";
}

function supprimerCommande(){
    echo "On est dans supprimerCommande";
}

?>