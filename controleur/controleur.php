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
    echo "On est dans creerOrdi.";
}

function creerValidationOrdi(){
    echo "On est dans creerValidationOrdi.";
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