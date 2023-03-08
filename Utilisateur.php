<?php
class Utilisateur{
    private $erreurs=[],
    $m_id,
    $m_nom,
    $m_prenom,
    $m_tel,
    $m_mail;

    const NOM_INVALIDE = 1;
    const PRENOM_INVALIDE = 2;
    const MAIL_INVALIDE = 3;
    public function __construct($donnees = []){
        
    }
    public function hydrater($donnees = []){

    }
    //Setteurs
    public function setId($id){

    }
    public function setNom($nom){

    }
    public function setPrenom($prenom){

    }
    public function setTel($tel){

    }
    public function setmail($mail){

    }
    //getteurs
    public function getId(){

    }
    public function getNom(){
        
    }
    public function getPrenom(){
        
    }
    public function getTel(){
        
    }
    public function getMail(){
        
    }
    public function getErreurs(){
        
    }
    public function isUserValid(){
        
    }
}
