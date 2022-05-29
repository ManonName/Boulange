<?php
    require_once "connexion.php";

        function lireOrdis(){
        $pdo = getPdo();
        $sql = "SELECT * FROM ordis";
        $req = $pdo->prepare($sql);
        $req->execute();
        $ordis = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $ordis;
    }
    
    function lireOrdiById($id){
        $pdo = getPdo();
        $req = "SELECT * FROM ordis WHERE id=:id";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":id",$id,PDO::PARAM_STR);
        $cpt = $stmt->execute();
        $ordi = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();  
        return $ordi;
    }    
    
    function lireOrdisBd(){
        $pdo = getPdo();
        $sql = "SELECT * FROM ordis";
        $req = $pdo->prepare($sql);
        $req->execute();
        $ordis = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $ordis;
    }

    function supprimerOrdiBD($id){
        $pdo = getPdo();
        $req = "Delete from ordis where id = :idOrdi";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":idOrdi",$id,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            echo "ordi supprimer id=".$id."<br>";
        }
    }
    
    
    function ajouterOrdiBd($denomination,$prix,$processeur,$ecran,$vive,$image,$lien){
        $pdo = getPdo();
        $req = "
        INSERT INTO ordis (denomination, prix , processeur, ecran, vive, image, lien)
        values (:denomination, :prix, :processeur, :ecran, :vive, :image, :lien)";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":denomination",$denomination,PDO::PARAM_STR);
        $stmt->bindValue(":prix",$prix,PDO::PARAM_STR);
        $stmt->bindValue(":processeur",$processeur,PDO::PARAM_STR);
        $stmt->bindValue(":ecran",$ecran,PDO::PARAM_STR);
        $stmt->bindValue(":vive",$vive,PDO::PARAM_STR);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        $stmt->bindValue(":lien",$lien,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            echo "livre insérer id=".$pdo->lastInsertId()."<br>";
        }        
    }
