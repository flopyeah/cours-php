<?php 

    include 'fonction.php';


    if (isset($_POST['nom'])) {
        $varNom = checkValid($_POST['nom']);

        if ($varNom === false) {
            echo 'vous devez remplir votre nom';
        }
    }

?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>Inscription à une formation de cuisine</legend>

            <label for="nom">Nom d'utilisateur</label>
            <input name="nom" type="nom" placeholder="Votre nom"><br>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password"><br>

            <label for="email">Email</label>
            <input name="email" type="email" placeholder="obligatoire" requiered=""><br>

            <label for="radio">Sexe</label><br>
            <input type="radio" name="sexe" value="Homme">
            <label for="email" id="homme">Homme</label><br>
            <input type="radio" name="sexe" value="Femme">
            <label for="email" id="Femme">Femme</label><br>
            <input type="radio" name="sexe" value="Autre">            
            <label for="email" id="autre">Autre</label><br>
            <label for="description" id="description">Description :</label>
            <textarea name="description" type="text" row="4" cols="50"></textarea>
            <br>
            <input type="checkbox" name="accepter" value="conditions">
            <label for="checkbox">Accépter les conditions</label>
            
            <br>
            <input value="M'inscrire" type="submit">    
        </fieldset>        
    </form>
</body>
</html>
