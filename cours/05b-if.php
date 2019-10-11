<!DOCTYPE html>
<html>
  <head>
    <title>Cours PHP & MySQL</title>
  </head>
  <body>
    <h1>Structure conditionelle "if"</h1>
    <?php
            $x = 4; //On affecte la valeur 4 à $x
            
            //Ecrire ceci :
            if($x >= 0){
                echo '$x stocke un nombre positif<br>';
            }else{
                echo '$x stocke un nombre négatif<br>';
            }
            
            //Est équivalent à cela :
            echo $x >= 0 ? '$x stocke un nb positif<br>' : '$x stocke un nb négatif<br>'; 
        ?>
  </body>
</html>