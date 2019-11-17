<!DOCTYPE html>
<html>
  <head>
    <title>Cours PHP & MySQL</title>
  </head>
  <body>
    <h1>Syntaxe PHP</h1>
    <?php
        // déclaration de la variable $array de type array 
      
   
        $array = [
          "Bonjour",    // 0
          "Hello",      // 1
          "Buenos Dias",// 2
        ];

echo $array[1];








        // affiche l'element 2 du tableau Buenos Dias
        //echo $array[2];

        $ages = [
          'Mathilde' => 27, 
          'Pierre'  => 29, 
          'Paul'    => 21
        ];
        echo $ages['Mathilde'];

        echo $ages['Paul'];
    ?>
    <br>
    <?php
        // Tableaux multidimentionnels associatifs 
        $array = [
          "fr"  => ["Bonjour","au revoir", "merci"],
          "en"  => ["Hello", "good bye", "thank you"],
          "es"  => ["Buenos Dias", "adios", "gracias"]
        ];
 
echo $array['en'][2]; 

die;





        // afficher au revoir dans les 3 langues 
        echo $array['en'][1];
        echo $array['fr'][1];
        echo $array['es'][1];
    ?>
  </body>
</html>