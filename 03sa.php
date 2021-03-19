<?php

// - pokemon_defense function will echo the name of the pokemon with defense is greater than or equal to limit_number

    function pokemon_defense($arrayname, $limit_number){
        foreach($arrayname as $arr){
            if ($arr["defense"]>=$limit_number){
                echo(arr["species"]);
            }
        }
    }


?>