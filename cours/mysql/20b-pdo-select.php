<?php 
    // connexion à la BDD 
    $servername = 'localhost';
    $username   = 'root';
    $password   = 'root';
    $dbname     = 'cours';
    
    //On essaie de se connecter
    try{
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL avec PDO</h1>  
        <?php
            $query      = 'SELECT code, name FROM departments';

            $response   = $bdd->query($query);
            $ListeDepartements = $response->fetchAll(PDO::FETCH_ASSOC);

            foreach ($ListeDepartements as $departement) {
                echo $departement['code']. ' - ' .$departement['name'] . '<br />';
            }

            //$reponse->closeCursor();
        ?>
    </body>
</html>