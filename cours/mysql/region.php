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
      die( "Erreur : " . $e->getMessage());
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Bases de données MySQL avec PDO</h1>  
        <?php
            
            $query      = ' SELECT name, code
                            FROM regions ';

            $queryPrepare   = $bdd->prepare($query);

            $queryPrepare->execute();

            $ListeRegions = $queryPrepare->fetchAll(PDO::FETCH_ASSOC);

            foreach ($ListeRegions as $region) {
                echo '<a href="departement.php?code='.$region['code'].'">'. $region['code']. ' - ' .$region['name'] . '</a><br>';
            }
            
        ?>
    </body>
</html>
