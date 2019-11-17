<?php
// je crypte mon mot de passe "monSuperMdp"
$mdp =  password_hash("monSuperMdp", PASSWORD_BCRYPT);
echo $mdp;
echo '<br>';

// la variable contiendrait le mot de passe recu en POST 
$passwordRecu = 'monSuperMdp';

// je décrypte mon mot de passe et vérifie s'il correspond a la valeur encodé 
$validPwd = password_verify ( $passwordRecu , $mdp ); 

/* si $validPwd === true 
        le MDP tapé est le bon 
    si false 
        mauvais MDP  
*/ 
var_dump($validPwd);
echo '<br>';


?>
Exercice 1
dans un formulaire sur la page user.php
    Civilite
    Nom 
    Prenom
    e-mail
    Password

1) A la validation du formulaire, stocker les informations dans un array (tableau associatif), 
2) enregistrez ensuite cet array dans une variable de session
3) afficher les informations enregistrées sur une nouvelle page info.php
    rajouter un lien 'modifier mes informations' vers la page user.php 
4) faire en sorte à ce que l'utilisateur puisse modifier ses informations sur le formulaire de la page user.php

