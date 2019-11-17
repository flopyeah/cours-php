<?php 

function checkIndentite ($age, $genre) {
    
    if ($age >= 18 && $genre == "homme" ) {
        echo 'homme majeur';
    }
    else if($age < 18 && $genre == "homme" ) {
        echo 'homme mineur';
    }
    else if ($age >= 18 && $genre == "femme" ) {
        echo 'femme majeure';
    }
    else {
        echo 'femme mineur';
    }
}

//checkIndentite(19, 'femme');



$var = 'Lorem ipsum dolor sit amet'; 

$testVar = ucwords($var);

var_dump($testVar);

echo time();


echo '<hr>';

echo date('d M Y G:i:s');








// Comparaison de 2 nombres
function numberCompare($nb1, $nb2) {

    if ($nb1 == $nb2) {
        echo $nb1. ' égal à '.$nb2;
    }
    else if ($nb1 > $nb2 ) {
        echo 'nb '.$nb1.' plus grand que '.$nb2;
    }
    else {
        echo 'nb '.$nb1.' plus petit que '.$nb2;
    }
    
}


function newNumberCompare($nb1, $nb2) {
    if ($nb1 > $nb2) {
        echo $nb1. ' plus grand que '. $nb2;
    }
    else if ($nb1 < $nb2) {
        echo $nb1. ' plus petit que '. $nb2;
    }
    else {
        echo $nb1 .' égal à '.$nb2;
    }
} 

//newNumberCompare(4, 4);












function nombreChaine($nombre, $chaine) {
    return $nombre.$chaine;
}

$var = nombreChaine(2, 'bonjour');


// Tableaux multidimentionnels associatifs 
$lang_word = [
    "fr"  => ["Bonjour","au revoir", "merci"],
    "en"  => ["Hello", "good bye", "thank you"],
    "es"  => ["Buenos Dias", "adios", "gracias"]
  ];


foreach ( $lang_word as $lang => $wordList ) {

    echo '<pre>';

    var_dump($wordList);

    echo '</pre>';
}











foreach ( $lang_word as $lang => $wordList ) {

    echo '<h1>'. $lang . '</h1>';

    echo '<pre>';

    foreach ( $wordList as $word ){
        echo '<li>'.$word.'</li>';
    }

    echo '</pre>';
}




$userList = [
    1 => ['nom' => 'Paul', 'age'=> 30],
    2 => ['nom' => 'Mathilde', 'age'=> 12],
    3 => ['nom' => 'Lea', 'age'=> 27],
    4 => ['nom' => 'Philippe', 'age'=> 13],
    5 => ['nom' => 'Marc', 'age'=> 18],
    6 => ['nom' => 'Hugo', 'age'=> 17],
];

foreach($userList as $num => $user) {
    if ($user['age'] >= 18){
        echo 'n°'.$num.' '.$user['nom'].', age : '.$user['age'].' ans <br>';
    }  
}


foreach($userList as $num => $user) {
    foreach( $user as $info ) {
        var_dump($info);
    }
}



/* afficher les utilisateurs majeur sous la forme suivante : 
 n°1 :  Paul, age : 30 ans <br>
 ...
 */


 /*
 en utilisant la fonction rand() de php
 afficher un nombre aléatoire entre 0 et 50 
 si le nombre est inférieur 25 afficher vous avez gagné 
 si le nombre est superieur à 25 afficher vous avez perdu 
 */ 


 /*
 en utilisant la fonction rand() de php
 afficher un nombre aléatoire entre 0 et 50 
 si le nombre est pair afficher vous avez gagné 
 si le nombre est impair afficher vous avez perdu 

 */

?>