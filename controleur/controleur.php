<?php
require_once "./outil/outils.php";
#require_once "./model/OrdiManager.php";


function afficherAccueil(){
    require "vue/accueil.php";
}

function afficherOrdis(){
    require "vue/afficherordis.php";
}

function supprimerOrdi($id){
    echo "On est dans supprimerOrdi.";
}

function afficherOrdi($id){
    echo "On est dans afficherOrdi.";
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