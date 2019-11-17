<?php 
$x = 0;

while ($x <= 10){
    echo 'Ceci est la ligne ' .$x. '<br>';
    $x++;
}









echo '<hr>';


for ($i = 10; $i >= 0; $i--) {
    echo 'Ceci est la ligne ' .$i. '<br>';
}













echo '<hr>';

$x = 1;

while ($x <= 200){
    echo 'Ceci est la ligne ' .$x. '<br>';
    $x += 15;
}




echo '<hr>';
    $legumes_saison = [
        'printemps'  => ['asperge', 'blette', 'navet', 'radis'], // 1
        'ete'        => ['comcombre', 'courgette', 'tomate', 'brocoli'], // 2 
        'automne'    => ['fenouil', 'haricot', 'oignon', 'poireau'], // 3
        'hiver'      => ['potiron', 'topinampour', 'salsifi', 'betterave'], // 4 
    ];


    echo $legumes_saison['ete']['1'];





// je boucle sur l'array "$legumes"
foreach ($legumes_saison as $saisonName => $legumesListe) {

    echo '<h1>'.$saisonName.'</h1>';

    foreach ($legumesListe as $legume){
        echo $legume.'<br>';
    }
}