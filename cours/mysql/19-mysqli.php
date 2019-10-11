<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Bases de données MySQLi</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            //On établit la connexion
            $bdd = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
            if($bdd->connect_error){
                die('Erreur : ' .$bdd->connect_error);
            }
            echo 'Connexion réussie';
        ?>
    </body>
</html>