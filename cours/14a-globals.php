<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            $prenom = 'Florian';
            $nom = 'Dupont';
            $age = 28;
            
            //On utilise le mot clef global
            function prez(){
                $mail = 'florian.dupont@gmail.com';
                global $prenom, $nom, $age;
                echo 'Je suis ' .$prenom. ' ' .$nom. ', j\'ai ' .$age. ' ans.<br>
                Mon adresse mail est : ' .$mail;
            }

            //On utilise la superglobale $GLOBALS
            function prez2(){
                $mail = 'florian.dupont@gmail.com';
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
    </body>
</html>