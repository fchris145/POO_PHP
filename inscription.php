<?php
require('inclureClasses.php');

$user = 'root';
$password = 'Chrysippe145';
$bddPDO = new PDO('mysql:host=localhost; dbname=espace_membres', $user, $password);
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$manager = new UtilisateurManager($bddPDO);

if(isset($_POST['nom'])){
    $utilisateur = new Utilisateur(
        [
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'tel' => $_POST['tel'],
            'mail' => $_POST['mail']
        ]
        );

        if($utilisateur->isUserValid()){
            $manager->inserer($utilisateur);

            echo 'Utilisateur enregistre';
        } else{
            $erreurs = $utilisateur->getErreur();
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Inscription Utilisateur</title>
</head>

<body>
    <div class="login-box">
        <h2>Entrez vos informations</h2>
        <form method="post" action="inscription.php">
            <div class="user-box">
                <?php if(isset($erreurs) && in_array(Utilisateur::NOM_INVALIDE, $erreurs)){
                    echo 'Le nom est invalide <br>';
                }
                ?>
                <input type="text" name="nom" required>
                <label>Nom</label>
            </div>
            <div class="user-box">
            <?php if(isset($erreurs) && in_array(Utilisateur::PRENOM_INVALIDE, $erreurs)){
                    echo 'Le prenom est invalide <br>';
                }
                ?>
                <input type="text" name="prenom" required>
                <label>Prenom</label>
            </div>
            <div class="user-box">
                <input type="text" name="tel" required>
                <label>Telephone
                </label>
            </div>
            <div class="user-box">
            <?php if(isset($erreurs) && in_array(Utilisateur::MAIL_INVALIDE, $erreurs)){
                    echo 'L\'adresse mail est invalide <br>';
                }
                ?>
                <input type="text" name="mail" required>
                <label>Email</label>
            </div>
            
            <button type="submit" name="envoyer">
                
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Valider
                
            </button>
        </form>
    </div>
    <?php
    
    ?>
</body>

</html>