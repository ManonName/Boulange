<?php
require_once "./outil/outils.php";
require_once "./model/OrdiManager.class.php";

class OrdisController{
    private $ordiManager;
    
    public function __construct(){
        $this->ordiManager = new OrdiManager();
        
    }
    function afficherAccueil(){
        require "vue/accueil.view.php";
    }

    //Affiche la liste des ordinateurs dans l'onglet Administration.
    function afficherOrdis(){
        $tabOrdis=$this->ordiManager->lireOrdis();    
        require "vue/afficherordis.view.php";
    }

    //Fonction qui affiche les caractéristiques d'un ordinateur en particulier dans Administration
    function afficherOrdi($id){
        $ordi=$this->ordiManager->lireOrdiById($id);
        require "vue/afficherordi.view.php";
    }

    function supprimerOrdi($id){
        $nomImage=$this->ordiManager->lireOrdiById($id)->getImage();
        unlink("public/images/".$nomImage);
        $this->ordiManager->supprimerOrdiBD($id);
        $ordi=lireOrdiById($id);
        header("Location: index.php?action=tab");
    }

    function creerOrdi(){
        require "vue/formulaireordi.view.php";
    }

    function creerValidationOrdi(){
        $file = $_FILES['image'];
        $repertoire = "public/images/";
        $nomImageAjoute = ajouterImage($file,$repertoire);
        $this->ordiManager->ajouterOrdiBd($_POST['denomination'],
                $_POST['prix'],$_POST['processeur'], $_POST['ecran'], $_POST['vive'], 
                $nomImageAjoute,$_POST['lien']);
        header("Location: index.php?action=tab");   
    }


    function afficherCardOrdis(){
                $ordis=$this->ordiManager->lireOrdis();
                require "vue/cardOrdis.view.php";
    }

    function modifierOrdi($id){
        echo "Modifier ORDI id=".$id."<br>";
        $ordi=$this->ordiManager->lireOrdiById($id);
        require "vue/modifierordi.view.php";
    }

    function modifiervalidationOrdi(){
        afficherTableau($_POST,"POST");
        $repertoire = "public/images/";
        $nomImageAjoute = $_POST['image'];
        $file = $_FILES['image'];
        afficherTableau($file,"file");
        $repertoire = "public/images/";
        if($_FILES['images']['size'] > 0){
            unlink($repertoire.$nomImageAjoute);
            $nomImageAjoute = ajouterImage($file,$repertoire);
        }
        
        $ordis=$this->ordiManager->modificationOrdiBD($_POST['id'],$_POST['denomination'], $_POST['processeur'],$_POST['prix'],$_POST['ecran'],$_POST['vive'], $_POST['image'], $_POST['lien']);
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
            $ordis[]=$this->ordiManager->lireOrdiById($id);
        }
        if(isset($ordis)){
            if(count($ordis) > 0)
                require "vue/afficherCommande.view.php";
        }
        else //echo "La commande est vide<br>";
            header("Location: index.php?action=card");
    }

    function supprimerCommande(){
        $_SESSION['ordis'] = array();
        afficherTableau($_SESSION,"controleur - supprimerCommand _SESSION");
        header("Location: index.php?action=card");
    }
}
?>