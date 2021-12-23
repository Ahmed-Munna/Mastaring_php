<?php



    $person = array("fname"=>"Salam","lname"=>"Hosen");

    $newName = &$person;

    $newName["fname"] = "kalam";

    print_r($person);
    print_r($newName);

    function printData(&$person){
         $person["fname"] .= " Rana";
        print_r($person);

    }
    printData($person);









?>