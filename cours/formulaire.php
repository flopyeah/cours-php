<?php 

echo $_POST['nom'];
echo $_POST['email'];
echo $_POST['sexe'];
echo $_POST['description'];

echo '<br>';

foreach ($_POST as $nomElement => $valeur) {
    echo $nomElement. ' : '. $valeur.' <br>';
}


?>