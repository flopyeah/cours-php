<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Lecture / ecriture dans un fichier </h1>
        <?php
            // nom du fichier dans lequel je vais enregistrer mes informations 
            $filename = 'fichier.txt';

            /*   
                création du fichier "fichier.txt" s'il n'existe pas 
                dans lequel j'écris "Ecriture dans un fichier"
            */
            if (!file_exists($filename)) {
                file_put_contents($filename, 'Ecriture dans un fichier');
            }

            //On récupère le contenu du fichier
            $texte = file_get_contents($filename);
            
            //On ajoute notre nouveau texte à l'ancien
            $texte .= "\nNouvelle ligne...";
            
            //On écrit tout le texte dans notre fichier
            file_put_contents($filename, $texte);

        ?>
    </body>
</html>