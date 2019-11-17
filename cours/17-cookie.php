<?php 
    setcookie('pseudo', 'Jack33', time() + 365*24*3600);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Cours PHP & MySQL</title>
  </head>
  <body>
    <h1>Utilisation de Cookies</h1>
    <?php
        // Si le Cookie existe, j'affiche sa valeur 
        if (isset($_COOKIE['pseudo'])){
            echo $_COOKIE['pseudo']; 
        }

        //var_dump($_SESSION);
    ?>
  </body>
</html>