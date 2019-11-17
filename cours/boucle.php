<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h2>While</h2>
        <?php
            // j'affecte la valeur 0 à la variable $x 
            $x = 1;
            
            // tant que $x est inferieur ou égal à 10 je continue de boucler
            while($x <= 10){
                echo '$x contient la valeur ' .$x. '<br>';

                // j'incrémente +1 à $x
                $x++;
            }
        ?>

        <h2>Do while</h2>
        <?php
            $x = 0;
            
            do{
                echo '$x contient la valeur ' .$x. '<br>';
                $x++;
            }while($x <= 5);
            
        ?>

        <h2>Boucle "for" </h2>
        <?php
            // je boucle sur la valeur de $x de 0 à 5 inclus
            for($x = 0; $x <= 5; $x++){    
                echo '$x contient la valeur ' .$x. '<br>';
            }
        ?>

<h2>Boucle Foreach </h2>
        <?php
            $ArrayPrenoms = ['Mathilde', 'Pierre', 'Jean', 'Florian'];
            
            //On utilise une boucle foreach ($tableau as $valeurs)
            foreach ($ArrayPrenoms as $prenom){
                echo  $prenom .'<br>';
            }

            $nbElement = count($ArrayPrenoms);
            
            for ($i = 0; $i < $nbElement; $i++) {
                echo $ArrayPrenoms[$i] .$i. '<br> ';
            }
        ?>
    </body>
</html>
