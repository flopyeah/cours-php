<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>SuperGlobale $_SERVER</h1>
        <?php
            //Renvoie le nom du fichier contenant le script 
            echo $_SERVER['PHP_SELF']. '<br>';
            
            //Renvoie le nom du serveur qui héberge le fichier
            echo $_SERVER['SERVER_NAME']. '<br>';
            
            //Renvoie l'adresse IP du serveur qui héberge le fichier
            echo $_SERVER['SERVER_ADDR']. '<br>';
            //selon que vous utilisiez une adresse ipv6 ou ipv4, vous pouvez avoir soit la valeur ::1 soit la valeur 127.0.0.1
            
            //Retourne l'IP du visiteur demandant la page
            echo $_SERVER['REMOTE_ADDR']. '<br>';
            
            //Retourne le temps Unix du début de la requête
            echo $_SERVER['REQUEST_TIME'];
        ?>
    </body>
</html>