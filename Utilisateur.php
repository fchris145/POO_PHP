<?php
class Utilisateur{
    private $m_erreurs=[],
    $m_id,
    $m_nom,
    $m_prenom,
    $m_tel,
    $m_mail;

    const NOM_INVALIDE = 1;
    const PRENOM_INVALIDE = 2;
    const MAIL_INVALIDE = 3;
    public function __construct($donnees = []){
        if(!empty($donnees)){
            $this->hydrater($donnees);
        }  
    }
    public function hydrater($donnees = []){
        foreach ($donnees as $attribut => $valeur) {
            $methodeSetters = "set".ucfirst($attribut);
            $this->$methodeSetters($valeur);
        }
    }
    //Setteurs
    public function setId($id){
        if(!empty($id)){
            $this->m_id = (int) $id;
        }
    }
    public function setNom($nom){
        if(!is_string($nom) || empty($nom)){
            $this->m_erreurs[] = self::NOM_INVALIDE;
        }
        else{
            $this->m_nom = $nom;
        }
    }
    public function setPrenom($prenom){
        if(!is_string($prenom) || empty($prenom)){
            $this->m_erreurs[] = self::NOM_INVALIDE;
        }
        else{
            $this->m_prenom = $prenom;
        }
    }
    public function setTel($tel){
        $this->m_tel = $tel;
    }
    public function setmail($mail){
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $this->m_mail = $mail;
        }
        else{
            $this->m_erreurs[] = self::MAIL_INVALIDE;
        }
    }
    //getteurs
    public function getId(){
        return $this->m_id;
    }
    public function getNom(){
        return $this->m_nom;
    }
    public function getPrenom(){
        return $this->m_prenom;
    }
    public function getTel(){
        return $this->m_tel;
    }
    public function getMail(){
        return $this->m_mail;
    }
    public function getErreur(){
        return $this->m_erreurs;
    }
    public function isUserValid(){
        return !(empty($this->m_nom) || empty($this->m_prenom) || empty($this->m_mail));
    }
}
?>