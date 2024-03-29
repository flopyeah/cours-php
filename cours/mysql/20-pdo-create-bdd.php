<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $dbname  = 'monsite';
            
            try{
                $dbco = new PDO("mysql:host=$servername", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = 'CREATE DATABASE '.$dbname;
                $dbco->exec($sql);
                
                echo 'La BDD '.$dbname .' a bien été créé.';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>