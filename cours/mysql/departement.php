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
            if (isset($_GET['code'])) {
                $query      = ' SELECT D.code, D.name, R.name as region 
                                FROM departments D, regions R
                                WHERE region_code = '. $_GET['code'].'
                                AND D.region_code = R.code';

                $response   = $bdd->query($query);

                $ListeDepartements = $response->fetchAll(PDO::FETCH_ASSOC);

                echo '<h2>'.$ListeDepartements[0]['region'].'</h2>';

                foreach ($ListeDepartements as $departement) {
                    echo $departement['code']. ' - ' .$departement['name'] . '<br />';
                }
            }
        ?>
    </body>
</html>
