<?php
    $servername = 'localhost';
    $username   = 'root';
    $password   = 'root';
    $dbname     = 'cours';
    
    //On établit la connexion
    $bdd = new mysqli($servername, $username, $password, $dbname);
    
    //On vérifie la connexion
    if($bdd->connect_error){
        die('Erreur : ' .$bdd->connect_error);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Bases de données MySQLi</h1>  
        <?php 
            $sql = 'SELECT code, name FROM regions';
            $result = $bdd->query($sql);
            
            if ($result->num_rows > 0) {
                // je boucle sur tous les elements et je les affiche
                while($row = $result->fetch_assoc()) {
                    echo '<a href="departement.php?code='.$row['code'].'">'. $row['code']. ' - ' .$row['name'] . '</a><br>';
                }
            } 
            else {
                echo "0 results";
            }
            $bdd->close();
        ?>
    </body>
</html>