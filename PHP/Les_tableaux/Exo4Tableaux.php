<?php

/*Exercice 4
Combien de semaines dure le stage du groupe 19003 ?*/

 $a = array(
    "19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
    "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
    "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
   );
$occ = array_count_values($a[19003]);
$nombre  =  $occ['Stage'] ;
   echo 'le stage dure '.$nombre.' semaines'. ' sur '.count($a[19003]).' semaines'. '<br>'. '<br>';

   
$aNbSemaines = array_count_values($a["19003"]);

    var_dump($aNbSemaines);

    echo"Le stage du groupe 19003 dure ".$aNbSemaines["Stage"]." semaines. <br>";
?>


    
   