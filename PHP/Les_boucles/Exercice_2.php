

/*Exercice 2
Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers*/


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <?php

//Exercice 2 Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers.


$savefichiers = 0;
while($savefichiers < 500){
    $savefichiers +=1;
    echo '- '.$savefichiers.' Je dois faire des sauvegardes régulières de mes fichiers.<br>';
}
    ?>
    <?php

 // autres methodes   
//Exercice 2 Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers.
echo str_repeat ( "Je dois faire des sauvegardes régulières de mes fichiers.". </br> , 500) ;


?>

</body>
</html>








