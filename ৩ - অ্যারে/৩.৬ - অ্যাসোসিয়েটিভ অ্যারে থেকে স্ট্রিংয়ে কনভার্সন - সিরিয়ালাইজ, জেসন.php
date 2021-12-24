<?php


    $team = [
        "Bangladesh" => "Tamim,Musfiq,Sakib,Masrafe",
        "Barishal"   => "Dabu,Atik,Jahid,joy,Onik,Munna,Emon,Birnto",
        "Dhaka"      => "Ratul,Omi,Morsalin"
    ];

    printf("%s \n%s",$team["Bangladesh"],$team["Barishal"]);
    echo "\n";
    echo serialize($team);

    print_r($team);

    $jsen = json_encode($team);
    echo $jsen;

    echo "\n\n";

    $jsen2 = json_decode($jsen,true);
    print_r($jsen2);

?>