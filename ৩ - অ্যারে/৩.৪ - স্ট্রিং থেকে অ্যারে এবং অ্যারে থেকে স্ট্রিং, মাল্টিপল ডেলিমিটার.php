<?php

    // $var = explode(",","Sakib,Tamim,Musfiq,Masrafe");

    // var_dump($var);

    // $var = join(",",$var);
    // echo $var;

    // $var = preg_split("/(, |,)/","Sakib,Tamim,Musfiq,Masrafe, Rubel, Mustafiz");
    // var_dump($var);

    // $var = explode(', ','A, B, C, D, E, F');
    // var_dump($var);
    // $var = join(', ',$var);
    // echo $var;

    $var = preg_split("/(, |,)/","A, B, C,D,E, F");
    var_dump($var);