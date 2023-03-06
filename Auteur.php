<?php
final class Auteur extends Utilisateur {
    //Attributs
    private $m_note;
    private $m_avis;

    const NREF_BASSE = 10;
    const NREF_HAUTE = 15;


    //Methodes
    public function __construct($nom, $prenom, $age, $email, $note, $avis) {
        Parent::__construct($nom, $prenom, $age, $email);
        $this->setNote($note);
        $this->setAvis($avis);

    }
    public function afficheNom(){
        return $this->m_nom;
    }
    public function seConnecter(){
        echo 'Je suis ' .$this->m_nom. ', un auteur de votre appli, je peux donc  me connecter';
    }
    //Setteurs
    public function setNote($note){
        $this->m_note = $note;
    }
    public function setAvis($avis){
        $this->m_avis = $avis;
    }
    //Getteurs
    public function getNote(){
        return $this->m_note;
    }
    public function getAvis(){
        return $this->m_avis;
    }

}
?>