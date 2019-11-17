<?php
    include 'fonction.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            echo returnInclude();

            // j'inclus le fichier menu.php
            echo '<h2>Menu inclus avec include</h2> <br>';
            include 'menu.php';
        
            echo '<h2>Menu inclus avec require</h2> <br>';
            require 'menu.php';
            
        ?>
    </body>
</html>