Exercice 1
Ecrire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur,  login.php

si 
    login = admin 
    password = mdp_secret

    j'affiche "vous etes admin vous avez acces a la page"

sinon 
     afficher "désolé vous n'etes pas admin"

créez la page admin.php  
elle ne doit accessible uniquement si le login/password sont valides
sinon rediriger vers la page login.php 

// pour rediriger vers une page en php
https://www.php.net/manual/fr/function.header.php

header('Location: page.php');
exit;
