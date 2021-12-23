<?php

    $number = array(1,4,3,6,2,9,8,5,7);
    $alfabate = array('c','C','d','D','g','G','a','A','b','B','e','E','H','h','I','i');
    sort($number, SORT_STRING);
    print_r($number);
    sort($alfabate, SORT_STRING | SORT_FLAG_CASE );
    print_r($alfabate);