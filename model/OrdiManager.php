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
    
    function lireOrdisBd(){
        $pdo = getPdo();
        $sql = "SELECT * FROM ordis";
        $req = $pdo->prepare($sql);
        $req->execute();
        $ordis = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $ordis;
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
