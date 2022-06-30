<?php
    require_once "controleur/OrdiControleur.php";
    require_once "outil/outils.php";
    session_start();
    $id_session = session_id();
    $ordiController = new OrdisController;
    if(empty($_GET['action'])){
        $ordiController->afficherAccueil();
    }
    elseif(isset($_GET['action'])) {
        if($_GET['action']=="tab"){
            $ordiController->afficherOrdis();
        }
        elseif($_GET['action'] == 'suppr'){ //OK
            $ordiController->supprimerOrdi($_GET['id']);
        }
        else if($_GET['action'] == 'lire'){ //OK
            $ordiController->afficherOrdi($_GET['id']);
        }
        elseif($_GET['action'] == 'creer'){ //OK
            $ordiController->creerOrdi();
        }
        elseif($_GET['action'] == 'valid-creer'){ //OK
            $ordiController->creerValidationOrdi();
        }
        elseif($_GET['action']=="card"){  //OK
            $ordiController->afficherCardOrdis();
        }
        elseif($_GET['action'] == 'modifier'){ //OK
            $ordiController->modifierOrdi($_GET['id']);
        }
        elseif($_GET['action'] == 'valid-modifier'){//OK
            echo "Modifier validation";
            modifierValidationOrdi();
        }
        elseif($_GET['action'] == 'addpanier'){ //OK
            echo "Ajouter panier id=".$_GET['id'];
            $ordiController->ajouterOrdiPanier($_GET['id']);
        }
        elseif($_GET['action'] == 'panier'){ //OK
            echo "Voir commande";
            if(isset($_SESSION['ordis']))
                $ordiController->afficherCommande();
            else echo "La session n'existe pas";
        }
        elseif($_GET['action']=="supprpanier"){ 
            echo "Supprimer commande";
            $ordiController->supprimerCommande();
        }
        elseif($_GET['action'] == 'addpanier'){ //OK
            echo "Ajouter panier id=".$_GET['id'];
            $ordiController->ajouterOrdiPanier($_GET['id']);
        }
        else {
            echo "La page n'existe pas";
        } 
    }
    else {
        echo "La page n'existe pas";
    } 
?>