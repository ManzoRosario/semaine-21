<?php

/*Exercice 2
Trouver la position de la dernière occurrence de Stage pour le groupe 19001.*/

$a = array(
    "19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
    "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
    "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
   );
   $semaine = count($a[19001]);
   $i = -1;
   while ($a[19001][++$i] != "Stage");
   $occ = array_count_values($a[19001]);
$nombre  =  $occ['Stage'] + $i ;
   echo 'Trouver la position de la dernière occurrence de stage pour le groupe 19001 ?<br>
   la dernière occurence de stage aura lieu à la semaine '.$nombre.' sur ' .$semaine ;
   ?>
