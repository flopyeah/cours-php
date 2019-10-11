<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Do while</h1>
        <?php
            $x = 0;
            $y = 20;
            
            do{
                echo '$x contient la valeur ' .$x. '<br>';
                $x++;
            }while($x <= 5);
            
            do{
                echo '$y contient la valeur ' .$y. '<br>';
                $y++;
            }while($y <= 5);
        ?>
    </body>
</html>