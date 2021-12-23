<?php

    // $var = explode(",","Sakib,Tamim,Musfiq,Masrafe");

    // var_dump($var);

    // $var = join(",",$var);
    // echo $var;

    $var = preg_split("/(, |,)/","Sakib,Tamim,Musfiq,Masrafe, Rubel, Mustafiz");
    var_dump($var);