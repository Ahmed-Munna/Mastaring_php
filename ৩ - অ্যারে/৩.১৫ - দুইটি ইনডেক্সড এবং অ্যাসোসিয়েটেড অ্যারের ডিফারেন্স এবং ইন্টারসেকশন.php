<?php

    $ar = array(
        "a"=>"apple",
        "b"=>"Banana",
        "a"=>"apple",
        "b"=>"Banana",
        "a"=>"apple",
        "c"=>"clamon",
        "d"=>"apple",
        "e"=>"egg"
    );
    $arr = array(
        "a"=>"apple",
        "b"=>"Bengel",
        "a"=>"leamon",
        "b"=>"Orreng",
        "a"=>"Pulm",
        "c"=>"clamon",
        "d"=>"apple",
        "e"=>"egg"
    );

    $adf = array_intersect_assoc($arr,$ar);
    print_r($adf);

    $add = array_diff_assoc($ar,$arr);
    print_r($add);