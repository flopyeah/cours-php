<?php 
//Exercice 1 
    $age = 14;

    if ($age >= 18) {
        echo 'Vous êtes majeur'; 
    }
    else {
        echo 'Vous êtes mineur'; 
    }

    echo '<hr>';
















// exercice 2 
$isEasy = true; 

if ($isEasy == true) {
    echo "c'est difficile";
} 
else 
{
    echo "c'est facile ";
}

echo '<hr>';
// maniere 2 
echo ($isEasy === true) ? "c'est facile" : "c'est difficile";


















echo '<hr>';
// exercice 3 

// true => homme 
// false => femme
$gender = false; 
$age = 1; 

if (($gender === true) && ($age >= 18)) {
    echo 'Vous êtes un homme et vous êtes majeur'; 
}
else if (($gender === false) && ($age >= 18)) {
    echo 'Vous êtes une femme et vous êtes majeur'; 
}
else if (($gender === true) && ($age <= 18)) {
    echo 'Vous êtes une homme et vous êtes mineur'; 
}
else {
    echo 'Vous êtes une femme et vous êtes mineur'; 
}



echo '<hr>';










$magnitude = 2;

switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 2:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 3:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
    case 4:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
    case 5:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
case 6:
echo "Séisme capable de tout détruire sur une très vaste zone.";
        break;
}
 

echo '<hr>';


$gender = 'Homme';

echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    
if ($gender != 'Homme') {
    echo 'C\'est une développeuse !!!';
}
else {
    echo 'C\'est un développeur !!!';
}





echo '<hr>';




/// exercice 8 
$isOk = true;

echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
if ($isOk) {
//if ($isOk === true) {
    echo 'c\'est ok super';
}
else {
    echo 'c\'est pas bon !!!';
}
