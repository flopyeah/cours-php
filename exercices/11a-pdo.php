PDO - Partie 1 : Lire des données
Exécuter le script geo.sql avant de commencer. Tous les résultats devront être affichés dans une page index.php.
Attention ! Si vous avez un doute sur les requêtes SQL à effectuer, 
saisissez-les directement dans PHPMyAdmin pour les tester, 
ça sera plus facile que de les tester directement dans le code PHP !

Rappel :
Connexion à la base de données $bdd = new PDO()...
Rédaction de la requête dans $request...
Exécution de la request : $response = $bdd->query()...
Lecture des résultats de la requête : $results = $response->fetchAll()...
Affichage des résultats (var_dump(), echo, print_r, foreach... le plus adapté)

Exercice 1
Afficher toutes les regions.

Exercice 2
Afficher tous les départements.

Exercice 3
Afficher les 20 premiers départements par ordre alphabetique 

Exercice 4 
Créer une page region.php qui recevra en parametre code qui correspondra au code région.
affiche tous les départements qui appartiennent à cette région. 
    Exemple
        => region.php?code=34
        affiche les départements ayant pour code_region 34 