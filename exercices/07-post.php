
Exercice 1 
Créer un formulaire sur la page index.php, 
ce formulaire doit rediriger vers la page user.php avec la méthode POST.

Une liste déroulante pour la civilité (M, Mme ou Mlle)
Un champ texte pour le nom
Un champ texte pour le prénom


Exercice 2
Créer un formulaire de contact avec les champs : 
nom 
prenom 
mail 
message => textarea

verifier que ces champs ne soient pas vides et envoyer un mail a l'adresse mail remplie 

// pour envoyer un mail utiliser la fonction mail() de php que vous trouverez dans la doc php.net 

// pour verifier que le mail est valide utiliser la fonction ci dessous 

// param $email adresse mail string 
// return false si l'adresse e-mail n'est pas valide 
// return $email si celle-ci est valide 
function valid_mail( $email ) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}