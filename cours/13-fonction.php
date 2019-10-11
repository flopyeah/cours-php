<?php
    /* 
        affiche bonjour et le prenom si un parametre est présent
    */
    function bonjour($prenom = 'Monsieur, Madame') {
        echo 'Bonjour '.$prenom;
    }

    // calcul de l'age en fonction de l'année de naissance donnée en parametre
    function calculAge($annee) {
        $age = date('Y') - $annee; 
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
        <h2>Bonjour</h2>
        <?php
            // bonjour Bernard 
            bonjour('Bernard');
            bonjour();
        ?>

        <h2>Calcul de l'age</h2>
        <?php
            // calcul de l'age grace à la fonction calculAge()
            $age = calculAge(1997);
            echo 'Vous avez ' . $age . ' ans.'; 
        ?>
    </body>
</html>