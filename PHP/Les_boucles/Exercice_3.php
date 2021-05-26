<?php 
/*Exercice 3
Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12}, le résultat doit être le suivant :*/

function table($nbr, $nbr2)
{
    $table = '<table border="1">';
    for ($a=0; $a <= $nbr; $a++) {
        $table .= '<tr>';
        for ($b=0; $b <= $nbr2 ; $b++) {
            $table .= '<td>'.$a*$b.'</td>';
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}
 
echo table(12, 12);
?>
