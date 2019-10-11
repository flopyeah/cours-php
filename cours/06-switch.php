<!DOCTYPE html>
<html>
  <head>
    <title>Cours PHP & MySQL</title>
  </head>
  <body>
    <h1>Structure conditionelle "switch"</h1>
    <?php
        $i = 2;

        switch ($i) {
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
    ?>
  </body>
</html>