<!DOCTYPE html>
<html>
  <head>
    <title>Cours PHP & MySQL</title>
  </head>
  <body>
    <h1>Structure conditionelle "switch"</h1>
    <?php
        // j'affecte la valeur 2 à la variable $i 
        $ide = 2;

        // selon la valeur de $i j'affiche sa valeur 
        switch($ide) {
            case 0:
                echo "i égal 0";
                break;
            case 1:
                echo "i égal 1";
                break;
            case 2:
                echo "i égal 2";
                break;
            default:
               echo "i n'est ni égal à 2, ni à 1, ni à 0.";
        }

        if ($ide == 0) {
          echo "i égal 0";
        }
        else if( $i == 1 ) {
          echo "i égal 1";
        }
        else if( $i == 2 ) {
          echo "i égal 2";
        }
        else {
          echo "i n'est ni égal à 2, ni à 1, ni à 0.";
        }
    ?>
  </body>
</html>