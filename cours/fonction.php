<?php

/**
 * Verifie si le champs saisi est valide 
 * renvoie true si le champs est n'est pas vide 
 * renvoie false dans le cas contaire 
 * 
 * @param string $string
 * @return bool
 */
    function checkValid($string) {
        if ($string == '') {
            return false; 
        }
        else {
            return true;
        }
    }

/**
 * Verifie si le champs saisi est bien un email
 * renvoie true si le champs saisi est un email 
 * renvoie false dans le cas contaire
 * 
 * @param string $string
 * @return bool
 */
    function checkEmail($email) {

    }


/**
 * Verifie si le champs saisi a bien une longueur précisée par l'argument $lenght par defaut 30
 * renvoie true si le nombre de caractere de $string est superieur ou egal à $lenght
 * revoie false dans le cas contaire
 * 
 * @param string $string
 * @param int $lenght
 * @return bool
 */
    function checkLenght($string, $lenght = 30) {

    }

?>
