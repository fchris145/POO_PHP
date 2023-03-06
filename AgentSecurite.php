<?php
class AgentSecurite extends Employe {

    public function __construct($nom, $prenom, $salaire){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setSalaire($salaire);
    }
    public function obtenirsalaire(){
        echo 'Je m\'appelle '.$this->getNom().' et mon salaire est: '.$this->getSalaire();
    }
    public function prendreConge(){
        echo 'Mon conge est de 30 jours';
    }
}
?>