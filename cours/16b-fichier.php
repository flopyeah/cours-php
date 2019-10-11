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
            $filename = 'fichier_2.txt';

            // ouvre un fichier en lecture ecriture 
            $fichier = fopen($filename, 'r+');
            fwrite($fichier, 'Un premier texte dans mon fichier');
            
            $line = fputs($fichier, "\nNouveau texte"); 

            // je recupère le contenu du fichier 
            $content = fread($fichier, filesize($filename));
            
            // quand on a fini de l'utiliser, on ferme le fichier
            fclose($fichier);

            echo $content;
        ?>
    </body>
</html>