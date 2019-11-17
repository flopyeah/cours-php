<?php
    // calcul de l'age en fonction de l'année de naissance donnée en parametre
    function calculAge($annee) {
        $age = 2019 - $annee; 
        return $age;
    }     
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Fonction php</h1>
        <?php
            // calcul de l'age grace à la fonction calculAge()
            $ageUser = calculAge(1997);
            echo 'Vous avez ' . $ageUser . ' ans.'; 
        ?>
    </body>
</html>