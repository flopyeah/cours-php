<!DOCTYPE html>
<html>
  <head>
    <title>Cours PHP & MySQL</title>
  </head>
  <body>
    <h1>Constante</h1>
    <?php
        // je définie la constante DIX à 10 
        define('DIX', '10');
        echo 'La constante DIX stocke la valeur ' .DIX. '<br>';

        // je définie la constante VINGT à 20 
        const VINGT = '20';
        echo 'La constante VINGT stocke la valeur ' .VINGT. '<br>';

        echo '<br>Numéro de ligne : '.__LINE__; 
        echo '<br>chemin du fichier : '.__FILE__;
    ?>
  </body>
</html>