<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
    </head>
    
    <body>
        <h1>Boucle Foreach </h1>
        <?php
            $ArrayPrenoms = ['Mathilde', 'Pierre', 'Jean', 'Florian'];
            
            //On rajoute une valeur à $prenoms et on lui associe la clef 8
            $ArrayPrenoms[8] = 'Lea';  
            
            $taille = count($ArrayPrenoms);
            
            echo '<h2>Boucle for</h2>';
            /*On tente d'afficher les valeurs de notre tableau en utilisant le
             *résultat de count() et en bouclant sur les indices*/
            for($i = 0; $i < $taille; $i++){
                $p .= $ArrayPrenoms[$i]. ', ';
            }
            echo $p;
            
            echo '<h2>Boucle foreach</h2>';
            //On utilise une boucle foreach ($tableau as $valeurs)
            foreach ($ArrayPrenoms as $prenom){
                $resultat .= $prenom. ', ';
            }
            echo $resultat;
        ?>
    </body>
</html>