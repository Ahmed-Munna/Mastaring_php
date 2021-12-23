<?php



    $n = 11; 

    if ( $n%2 == 0 ):
        echo "Even number";
        echo PHP_EOL;
        echo "Some text";
    else:
        echo "Odd Number";
        echo PHP_EOL;
        echo "Some text";
        echo PHP_EOL;
    endif;

    switch ($n = 20):
        case 30:
            echo "We are Proud sir...!";
            break;
        default:
            echo "Input are not exesting";
            break;
        endswitch;












?>