<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Formulaire GET</h1>
        <form action="" method="get">
            <p>
                <label>Prénom <input type="text" name="prenom" /></label>
                <label>nom <input type="text" name="nom" /></label>
                <input type="submit" value="envoyer" />
            </p>
        </form>
        <?php 
            // si la superglobale GET existe, j'affiche le prénom  
            if (isset($_GET['prenom'])){
                echo 'Votre prénom est : '. $_GET['prenom'];
            }

            if (isset($_GET['nom'])){
                echo 'Votre nom est : '. $_GET['nom'];
            }
        ?>
        
        <br><br>
        <!--// Lien vers la même page en utilisant le parametre prenom dans l'url-->
        <a href="15-form-get.php?prenom=Paul&nom=Joe">Paul Joe</a>
    </body>
</html>