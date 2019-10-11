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
            $prenom = 'Pierre';
            $nom = 'Giraud';
            $age = 28;
            
            //On utilise le mot clef global
            function prez(){
                $mail = 'pierre.giraud@edhec.com';
                global $prenom, $nom, $age;
                echo 'Je suis ' .$prenom. ' ' .$nom. ', j\'ai ' .$age. ' ans.<br>
                Mon adresse mail est : ' .$mail;
            }

            //On utilise la superglobale $GLOBALS
            function prez2(){
                $mail = 'pierre.giraud@edhec.com';
                echo 'Je suis ' .$GLOBALS["prenom"]. ' ' .$GLOBALS["nom"]. ', j\'ai '
                .$GLOBALS["age"]. ' ans.<br>Mon adresse mail est : ' .$mail;
            }
            prez();
            echo '<br><br>';
            prez2();
            echo '<br><br>';
            echo '<pre>';
            print_r($GLOBALS);
        ?>
        <p>Un paragraphe</p>
    </body>
</html>