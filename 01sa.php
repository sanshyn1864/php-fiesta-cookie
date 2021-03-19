<?php

    $gameArray=[
        ["id"=>1, "species"=>"Bulbasaur", "type1"=>"Grass", "type2"=>"Poison", "ability"=>"Overgrow", "hp"=>45, "attack"=>49, "defense"=>49],
        ["id"=>2, "species"=>"Ivysaur", "type1"=>"Grass", "type2"=>"Poison", "ability"=>"Overgrow", "hp"=>60, "attack"=>62, "defense"=>63],
        ["id"=>3, "species"=>"Venusaur", "type1"=>"Grass", "type2"=>"Poison", "ability"=>"Overgrow", "hp"=>80, "attack"=>83, "defense"=>49],
        ["id"=>4, "species"=>"Charmander", "type1"=>"Fire", "type2"=>"N/A", "ability"=>"Blaze", "hp"=>45, "attack"=>39, "defense"=>43],
        ["id"=>5, "species"=>"Charmeleon", "type1"=>"Fire", "type2"=>"N/A", "ability"=>"Blaze", "hp"=>45, "attack"=>58, "defense"=>68],
        ["id"=>6, "species"=>"Charizard", "type1"=>"Fire", "type2"=>"Flying", "ability"=>"Blaze", "hp"=>45, "attack"=>78, "defense"=>78],
        ["id"=>7, "species"=>"Squirtle", "type1"=>"Water", "type2"=>"N/A", "ability"=>"Torrent", "hp"=>45, "attack"=>44, "defense"=>65],
        ["id"=>8, "species"=>"Wartortle", "type1"=>"Water", "type2"=>"N/A", "ability"=>"Torrent", "hp"=>45, "attack"=>59, "defense"=>80],
        ["id"=>9, "species"=>"Blastoise", "type1"=>"Water", "type2"=>"N/A", "ability"=>"Torrent", "hp"=>45, "attack"=>79, "defense"=>100],
        ["id"=>10, "species"=>"Caterpie", "type1"=>"Bug", "type2"=>"N/A", "ability"=>"Sheild Dust", "hp"=>50, "attack"=>20, "defense"=>55]
    ];

    print_r($gameArray);

    echo(count($gameArray));

    $favorite=$gameArray[6]["species"];

    echo("<br>");echo("<br>");
    foreach($gameArray as $arr){
        $name=$arr["species"];
        echo("$name<br>");
    }


?>