<?php
abstract class Employe {
    //Attributs
    protected $m_nom;
    protected $m_prenom;
    protected $m_salaire;

    //Methodes
    abstract function obtenirsalaire();
    abstract function prendreConge();
    //Setteurs
    public function setNom($nom){
        $this->m_nom = $nom; 
    }
    public function setPrenom($prenom){
        $this->m_prenom = $prenom;
    }
    public function setSalaire($salaire){
        $this->m_salaire = $salaire;
    }
    //Getteurs
    public function getNom(){
        return $this->m_nom;
    }
    public function getPrenom(){
        return $this->m_prenom;
    }
    public function getSalaire(){
        return $this->m_salaire;
    }
}

?>