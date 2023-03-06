<?php
class Utilisateur {
    //Attributs
    protected $m_nom;
    protected $m_prenom;
    protected $m_age;
    protected $m_email;

    
    //Methodes
    /* public function degreImplication() {
        if($this->getNote() >= self::NREF_HAUTE){
            echo "La contribution de cet utilisateur est excellente";
        }
        elseif($this->getNote() >= self::NREF_BASSE){
            echo "La contribution de cet utilisateur est moyenne";
        }
        else {
            echo "La contribution de cet utilisateur est insuffisante";
        }
    } */
    public function __construct($nom, $prenom, $age, $email) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setEmail($email);

    }
    
    //Implementation de fonctions pour modifier les valeurs des attributs de notre classe
    public function seConnecter(){
        echo 'je suis un utillisateur de votre application, je peux donc me connecter';
    }
    public function setNom($nom) {
        $this->m_nom = $nom;
    }
    public function setPrenom($prenom) {
        $this->m_prenom = $prenom;
    }
    public function setAge($age) {
        $this->m_age = $age;
    }
    public function setEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->m_email = $email;
        }
        else{
            throw new Exception("L'email entre n'est pas valide");
        }
    }


    //Implementation de fonctions permettant d'afficher les valeurs des fonctions
    public function getNom() {
        return $this->m_nom;
    }
    public function getPrenom() {
        return $this->m_prenom;
    }
    public function getAge() {
        return $this->m_age;
    }
    public function getEmail() {
        return $this->m_email;
    }
}
?>