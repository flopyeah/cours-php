<!DOCTYPE html>
<html>
  <head>
    <title>Cours PHP & MySQL</title>
  </head>
  <body>
    <h1>Structure conditionelle "if"</h1>
    <?php
        // année actelle 
        $actualYear = 2020;

        if ($actualYear == 2019)
        {
            echo "l'année actuelle est bien 2019";
        }
        else
        {
            echo "L'année actuelle n'est pas 2019, mais ".$actualYear;
        }
    ?>
        <br>
    <?php
        // valeur de la note sur x/20
        $note = 9;

        if ($note >=16 ) {
            echo 'Très bien, votre note est de : '.$note;
        }
        elseif ($note >=10) {
            echo 'Assez bien, votre note est de : '.$note;
        }
        else {
            echo 'Attention, vous n\'avez pas la moyenne, votre note est de : '.$note;
        }
    ?>
  </body>
</html>