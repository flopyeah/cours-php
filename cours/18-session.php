<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_start();

    // On crée des variables de session dans $_SESSION
    $_SESSION['prenom'] = 'Jean';
    $_SESSION['nom'] = 'Dupont';
    $_SESSION['age'] = 24;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Session PHP </h1>
        <?php
            /*
            Si la variable de session age est définie, on echo sa valeur
            puis on la détruit avec unset()*/
            if(isset($_SESSION['age'])){
                echo 'Tu as ' .$_SESSION['age']. ' ans<br>';
                unset($_SESSION['age']);
            }
            
            /*On détruit les données de session*/
            session_destroy();

            //On tente d'afficher les valeurs des variables age et prenom 
            echo 'Contenu de $_SESSION[\'age\'] : ' .$_SESSION['age']. '<br>';
            echo 'Contenu de $_SESSION[\'prenom\'] : ' .$_SESSION['prenom'];
            echo '<br><a href="17-cookie.php">page COOKIES</a>';
        ?>
    </body>
</html>