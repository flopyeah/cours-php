<?php 

$month = [
    1 => "Janvier",
    2 => "Février",
    3 => "Mars",
    4 => "Avril",
    5 => "Mai",
    6 => "Juin",
    7 => "Juillet",
    8 => "Août",
    9 => "Septembre",
    10 => "Octobre",
    11 => "Novembre",
    12 => "Décembre"
    ];

 $day = [
    1 => "Lundi",
    2 => "Mardi",
    3 => "Mercredi",
    4 => "Jeudi",
    5 => "Vendredi",
    6 => "Samedi",
    7 => "Dimanche",
 ];

 echo $day[date('N')].' ' . date('d').' ' . $month[date('n')];