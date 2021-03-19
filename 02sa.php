<?php

    function hp_sum(){
        $totalhp=0;
        foreach($gameArray as $arr){
            $totalhp+=$arr["hp"];
        }
        return $totalhp;
    }

   
    function ave_attack(){
        $length=count($gameArray);
        $totalAttack=0;
        foreach($gameArray as $arr){
             $totalAttack+=$arr["attack"];
        }
        return $totalAttack/$length;
    }


?>