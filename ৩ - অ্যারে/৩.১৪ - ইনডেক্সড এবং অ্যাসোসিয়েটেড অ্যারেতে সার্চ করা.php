<?php

$team = [
    "Bangladesh" => "Tamim,Musfiq,Sakib,Masrafe",
    "Barishal"   => "Dabu,Munna,Emon,Birnto",
    "Dhaka"      => "Ratul,Omi,Morsalin"
];
$num = array(1,2,4,6,4,5,3,'35',63,4);

if(in_array(35,$num, true)){
    echo "Number is founded";
}

 echo array_search(4,$num); //IT return ofset number

 if(key_exists("Bangladesh",$team)){
    echo "KEY IS FOUNDED";
 }
