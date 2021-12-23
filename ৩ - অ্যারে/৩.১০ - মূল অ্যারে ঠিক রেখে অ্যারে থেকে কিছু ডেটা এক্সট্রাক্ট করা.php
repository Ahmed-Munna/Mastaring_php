<?php


    $fruits = array("mango","Banana","Pinaple","Jackfruit","Pinut","Greap","Bracoly","Plum","Oliv");

    $fruits = array_slice($fruits,2,-1,true);
    print_r($fruits);

    $team = array("Liton","Nayem","Sakib","Musfiq","Mahmudullah","Sohan","Afif","Samim","Nasum","Mustafiz","Sorifull");

    $fst = array_slice($team,0,7);
    $snd = array("7"=>"Sayef");
    $trd = array_slice($team,8,3);

    $join = $fst + $snd + $trd;

    print_r ($join);











?>