<!DOCTYPE html>
<html>
  <head>
    <title>Cours PHP & MySQL</title>
  </head>
  <body>
    <h1>Variables</h1>
    <?php
        // j'affecte la valeur 30 à la variable $age 
        $age = 30;

        // j'affecte les valeur "Jacques" à la variable $prenom 
        $prenom = "Jacques";

        $presentation = "je m'appelle {$prenom}, et j'ai {$age} ans. ";
        $presentation2 = 'je m\'appelle '.$prenom.', et j\'ai '.$age.' ans. ';

        // j'affiche les variables
        echo $presentation;
        echo $presentation2;
        
    ?>
  </body>
</html>