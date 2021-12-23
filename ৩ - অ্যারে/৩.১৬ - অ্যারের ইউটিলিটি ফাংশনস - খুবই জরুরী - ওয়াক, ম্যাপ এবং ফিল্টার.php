<?php

    $arr = array(1,2,3,4,5,6,7,8,9);

    function squer($n){
        printf("The number is %d \n",$n*$n);
    }; 
    array_walk($arr,'squer');
    function queb($n){
        return $n*$n*$n;
    }
    print_r(array_map('queb',$arr));

    $person = array("munna","mahin","mazba","Dabu","Emon","Binod");

    function per($n){
        return $n[0]=="m";
    }
    $newPerson = array_filter($person,'per');

    print_r($newPerson);