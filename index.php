<?php
require('personnel.php');
require('Fonctionnaire.php');
require('Professeur.php');

// $utilisateur1 = new Utilisateur('Jean', 'Paul', 30, 'jean2000@gmail.com');
// $utilisateur2 = new Utilisateur('Naoussi', 'Fotso', 24, 'naoussif@gmail.com');
// $utilisateur3 = new Utilisateur('Chrys', 'Junior', 23, 'jnaoussi2@gmail.com');

// echo "L'utilisateur1 a pour nom complet \" ". $utilisateur3->getNom(). " ". $utilisateur3->getPrenom(). " \" 
// , il est age de ".$utilisateur3->getAge(). " ans et son adresse mail est ". $utilisateur3->getEmail(). ". <br>";

// $utilisateur2->setNom('Koagne');
// echo "L'utilisateur2 s'appelle : ".$utilisateur2->getNom(). ". <br>";

// $utilisateur3->setPrenom('Raphael');
// echo "L'utilisateur2 a comme prenom : ".$utilisateur3->getPrenom(). ". <br>";

// var_dump($utilisateur1);

// $utilisateur1 = new Utilisateur('Jean', 'Paul', 30, 'jean2000@gmail.com');
// $utilisateur1->setNote(2);
// echo $utilisateur1->getNote();
// echo '<br>';
// $utilisateur1->degreImplication();

/* $auteur1 = new Auteur('Chrys', 'Junior', 30, 'amine@yahoo.fr', 12, 'J\'aime bien');
echo $auteur1->getNote();
echo '<br>';
echo $auteur1->getAge(); */

$professeur1  = new Professeur('Junior', 25, 54);
echo $professeur1->getNom(). '<br>';
echo $professeur1->calculerSalaire(). '<br>';
echo $professeur1->passerExamen();

?>