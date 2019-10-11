<?php 

    function valid_input($input) {
        if ( $input != '' ) {
            return $input;
        } 
        else {
            return false;
        }
    }

    // le formulaire est validé par la methode post 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = valid_input($_POST["nom"]);
        $prenom = valid_input($_POST["prenom"]);
        $email = valid_input($_POST["email"]);
        $civilite = valid_input($_POST["civilite"]);

        // je verifie si tous les champs ont un valeur 
        // si l'un d'eux est à false, il ne passera pas dans la boucle 
        if ($prenom && $nom && $email && $civilite ) {
            // traitement du formulaire 
            // enregistrement en BDD ou envoie d'e-mail 
            $form = true;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Formulaire POST</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <p>
                <label>
                    Civilité 
                    <select name="civilite" id="civ-select">
                        <option value="" selected>--Civilité--</option>
                        <option value="M">Monsieur</option>
                        <option value="Mme">Madame</option>
                        <option value="Mlle">Mademoiselle</option>
                    </select>
                </label>
                <?php 
                if (isset($civilite) && $civilite === false) {
                    echo 'Vous devez selectionner votre civilité';
                }
                ?>
            </p>
            <p>
                <label>Prénom <input type="text" name="prenom" /></label>
                <?php 
                if (isset($prenom) && $prenom === false) {
                    echo 'Vous devez saisir votre prénom';
                }
                ?>
            </p>
            <p>
                <label>Nom <input type="text" name="nom" /></label>
                <?php 
                if (isset($nom) && $nom === false) {
                    echo 'Vous devez saisir votre nom ';
                }
                ?>
            </p>
            <p>
                <label>e-mail <input type="text" name="email" /></label>
                <?php 
                if (isset($email) && $email === false) {
                    echo 'Vous devez saisir une adresse e-mail';
                }
                ?>
            </p>    
            <p>
                <input type="submit" value="envoyer" />
            </p>
        </form>
        <?php 
            // j'informe l'utilisateur si le formulaire est valide
            if (isset($form) && $form === true) {
                echo 'Votre formulaire est valide.';
            }
        ?>
    </body>
</html>