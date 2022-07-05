<?php
class Ordi{
    private $id;
    private $titre;
    private $prix;
    private $nbPages;
    private $image;
    private $description;

    function __construct($denomination, $prix, $processeur, $ecran, $vive, $image, $lien) {
        $this->denomination = $denomination;
        $this->prix = $prix;
        $this->processeur = $processeur;
        $this->ecran = $ecran;
        $this->vive = $vive;
        $this->image = $image;
        $this->lien = $lien;
    }
    public function __toString() {
        return "denomination=".$this->denomination." prix=".$this->prix." processeur=".$this->processeur." ecran=".$this->ecran." vive=".$this->vive." image=".$this->image." lien=".$this->lien;
    }

    public function getDenomination(){return $this->denomination;}
    public function setDenomination($denomination){$this->denomination = $denomination;}

    public function getPrix(){return $this->prix;}
    public function setPrix($prix){$this->prix = $prix;}
    
    public function getProcesseur(){return $this->processeur;}
    public function setProcesseur($processeur){$this->processeur = $processeur;}

    public function getEcran(){return $this->ecran;}
    public function setEcran($ecran){$this->ecran = $ecran;}

    public function getVive(){return $this->vive;}
    public function setVive($vive){$this->vive = $vive;}
    
    public function getImage(){return $this->image;}
    public function setImage($image){$this->image = $image;}

    public function getLien(){return $this->lien;}
    public function setLien($lien){$this->lien = $lien;}    
    
    }