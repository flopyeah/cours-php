<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>While</h1>
        <?php
            // j'affecte la valeur 0 à la variable $x 
            $x = 0;
            
            // tant que $x est inferieur ou égal à 10 je continue de boucler
            while($x <= 10){
                echo '<p>$x contient la valeur ' .$x. '<p>';

                // j'incrémente +1 à $x
                $x++;
            }
        ?>
    </body>
</html>
