<?php 
    // connexion à la BDD 
    $servername = 'localhost';
    $username   = 'root';
    $password   = 'root';
    $dbname     = 'cours';
    
    //On essaie de se connecter
    try{
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
      die;
    }

    
    $data = [
        "email"     => 'jacques67@gmail.com', 
        "firstname" => 'Jean-Jacques',
        "lastname"  => 'Vabres',
        "id"        => 34
    ];

    $req = $bdd->prepare("UPDATE user 
                            SET email = :email, 
                                firstname = :firstname,
                                lastname = :lastname
                            WHERE user.id = :id ");

    $req->execute($data);

    

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Bases de données MySQL avec PDO</h1>  
        insert
    </body>
</html>