<?php 

$userList = [
    1 => [  'nom' => 'Paul', 
            'age'=> 30],
    2 => [  'nom' => 'Mathilde', 
            'age'=> 12],
    3 => ['nom' => 'Lea', 'age'=> 27],
    4 => ['nom' => 'Philippe', 'age'=> 13],
    5 => ['nom' => 'Marc', 'age'=> 18],
    6 => ['nom' => 'Hugo', 'age'=> 17],
];

/* afficher les utilisateurs majeur sous la forme suivante : 
 n°1 :  Paul, age : 30 ans <br>
 ...
 */
foreach ($userList as $num => $userInfo) {

    if ($userInfo['age'] >= 18) {
        echo 'n°'.$num.' : '.$userInfo['nom'].', '.$userInfo['age'].'ans <br>';
    }

}








die;


foreach($userList as $num => $user) {
    if ($user['age'] >= 18){
        echo 'n°'.$num.' '.$user['nom'].', age : '.$user['age'].' ans <br>';
    }  
}



/* afficher les utilisateurs majeur sous la forme suivante : 
 n°1 :  Paul, age : 30 ans <br>
 ...
 */
