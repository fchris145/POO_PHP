<?php
class Utilisateur {
    //Attributs
    protected $m_nom;
    protected $m_prenom;
    protected $m_age;
    protected $m_email;
    public  $fonction;

    
    //Methodes Magique
    public function __construct($nom, $prenom, $age, $email) {
        //est appele lorsque un objet de type utilisateur est appele
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setEmail($email);
    }
    public function __call($method, $param) { 
        //est appelee si un utilisateur tente d'acceder a une methode inexistante ou
        //inacessible
        echo 'La methode ' .$method. ' n\' est pas accesssible ou n\'existe pas <br>';
        echo 'Arguments: ' .implode(', ', $param). '<br>';
    }
    public function __get($attribut) {
        //est appele si un utilisateur tente d'acceder a un attribut inexistant ou
        // inacessible
        echo 'L\'attribut ' .$attribut. ' auquel vous tenter d\'acceder est inaccessible 
        ou n\'existe pas <br>';

    }
    public function __set($attribut, $valeur) {
        //est appele si un utilisateur tente de modifier un attribut inexistant ou
        // inacessible
        echo 'Impossible de mettre a jour l\'attribut ' .$attribut. ' avec la valeur '
        .$valeur. ', attribut non accessible ou inexistant <br>' ;
    }
    public function __isset($attribut) {
        //est appele lorsque la fonction isset() est appele sur des attributs inexistant
        //ou inaccessible
        echo 'L\'attribut ' .$attribut. ' n\'existe pas ou est inaccessible <br>';
    }
    public function __unset($attribut) {
        //est appele lorsque la fonction unset() est appele sur des attributs inexistant
        //ou inaccessible
        echo 'L\'attribut ' .$attribut. ' que vous voulez detruire n\'existe pas ou 
        est inaccessible <br>';
    }
    public function __toString() {
        // est appele lorsque l'on tente d'utiliser un objet comme etant une chaine
        // de caractere
        return 'L\'objet dont le nom est ' .$this->m_nom. ' est un objet et nom 
        une chaine de caractere <br>';
    }
    public function __invoke($arg) {
        //est appele lorsque l'on essaye d'utiliser un objet comme une fonction
        echo "Vous etes entrain d'utiliser un objet comme une fonction et vous 
        avez utilise comme argument " .$arg. "<br>";
    }
    
    //Implementation de fonctions pour modifier les valeurs des attributs de notre classe
    public function listerAttributs() {
        foreach ($this as $attribut => $valeur) {
            echo $attribut .' => '. $valeur .'<br>'; 
        }
    }
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