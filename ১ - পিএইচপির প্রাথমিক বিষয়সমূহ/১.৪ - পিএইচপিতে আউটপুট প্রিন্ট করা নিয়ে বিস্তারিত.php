<?php

    $fname = "Isaac";
    $lname = "Newton";

    printf("His Full%s is : %s %s","name",$fname,$lname)."\n";

    printf("\nHis Full%s is : %s %s","name",strtoupper($fname),strrev($lname));

    printf("\nHis Name is : %s %s",$fname,$lname);