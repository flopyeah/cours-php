<?php

$month = [
    1 => 'janvier',
     2 => 'février',
    3 => 'mars',
    4 => 'avril',
    5 => 'mai',
    6 => 'juin',
    7 => 'juillet',
    8 => 'aout',
    9 => 'septembre',
    10 => 'octobre',
    11 => 'novembre',
    12 => 'décembre'
];

var_dump($month);

echo '<hr>';

echo $month[3];

echo '<hr>';

echo $month[5];


echo '<hr>';


$legumes = [    
    "tomates", 
    "navets", 
    "carottes", 
    "oignons"
];

var_dump($legumes[2]);



echo '<hr>';


$user = [
    'nom' => 'Fazer',
    'prenom' => 'Florian', 
    'adresse' => 'Lyon'
];

$user = [
    'nom' => 'Fazer',
    'prenom' => 'florian',
    'adresse' => [
                    'rue' => 'rue de la république',
                    'ville' => 'Lyon',
                    'code-postal' => '69002'
                ]
];

var_dump($user['prenom']);



echo '<hr>';


$saison = [
    'hiver' => [ 'courgette' => ['quantite' => 10, 
                                'prix'=> 2.5], 
                'carotte' => [  'quantite' => 20,
                                'prix' => 4.5]], 
    'primptemps' => ['fraise' => ['quantite' => 40, 
                                    'prix' => 20], 
                    'couscous'],
    'été', 
    'automne'
];

echo 'quantité d\'un légume d\'hiver : ';
echo $saison['hiver']['courgette']['quantite'].' au prix de : ' . $saison['hiver']['courgette']['prix'].'<br>';