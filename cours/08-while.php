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
            $x = 0;
            
            while($x <= 10){
                echo '<p>$x contient la valeur ' .$x. '<p>';
                $x++;
            }
        ?>
    </body>
</html>
