<?php
class UtilisateurManager{
    private $m_bddPDO;

    public function __construct(PDO $bddPDO){
        $this->m_bddPDO = $bddPDO;
    }
    
    public function inserer(Utilisateur $utilisateur){
        $requete = $this->m_bddPDO->prepare("INSERT INTO utilisateurs(nom, prenom, tel, mail) VALUES(:nom, :prenom, :tel, :mail)");

        $requete->bindValue(':nom', $utilisateur->getNom());
        $requete->bindValue(':prenom', $utilisateur->getPrenom());
        $requete->bindValue(':tel', $utilisateur->getTel());
        $requete->bindValue(':mail', $utilisateur->getMail());

        $requete->execute();
    }

    public function getListeUtilisateur(){
        $requete = $this->m_bddPDO->query('SELECT * FROM utilisateurs ORDER BY ASC');

        $requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Utilisateur');

        $listeUtilisateurs = $requete->fetchAll();

        $requete->closeCursor();
        return $listeUtilisateurs;
    }

    
}

?>