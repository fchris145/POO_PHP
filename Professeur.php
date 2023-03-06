<?php
class Professeur implements Personnel, Fonctionnaire {
    private $m_nom;
    private $m_anciennete;
    private $m_indice;

    //Methodes
    public function __construct($nom, $anciennete, $indice){
        $this->setNom($nom);
        $this->setAnciennete($anciennete);
        $this->setIndice($indice);
    }

    public function passerExamen() {
        echo 'je suis fonctionnaire et passe l\'examen';
    }

    public function calculerSalaire(){
        return 1000 * (1 + $this->getIndice() * $this->getAnciennete() / 100);
    }
    //Setteurs
    public function setNom($nom) {
        $this->m_nom = $nom;
    }
    public function setAnciennete($anciennete) {
        $this->m_anciennete = $anciennete;
    }
    public function setIndice($indice) {
        $this->m_indice = $indice;
    }
    //Getteurs
    public function getNom() {
        return $this->m_nom;
    }
    public function getAnciennete() {
        return $this->m_anciennete;
    }
    public function getIndice() {
        return $this->m_indice;
    }
}