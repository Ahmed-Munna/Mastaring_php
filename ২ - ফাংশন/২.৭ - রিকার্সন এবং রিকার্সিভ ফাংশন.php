<?php
    // function sum($i){
    //     if($i>=20){
    //         return $i;
    //     }
    //     echo $i."\n";
    //     $i++;
    //     sum($i);
    // }
    // echo sum(0);

    function sum(int $start ,int $end){
        if($start>=$end){
            return $start;
        }
        echo $start."\n";
        $start++;
        sum($start,$end);
    }
   echo sum(10,20);