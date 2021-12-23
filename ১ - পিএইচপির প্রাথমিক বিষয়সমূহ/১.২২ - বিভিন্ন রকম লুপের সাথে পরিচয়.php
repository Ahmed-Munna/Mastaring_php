<?php


    // for($i = 1 ; $i<=10 ; $i++){
    //     for($j=1 ; $j<=$i ; $j++){
    //         echo "*";
    //         for($k=$j ; $k<=10 ; $k++){
    //             echo "*";
    //         }
    //         echo PHP_EOL;
    //     }
    //     for($a= 1 ; $a<10 ; $a++){
    //         for($b = 0 ; $b <= $a ; $b++){
    //             echo "*";
    //         }
    //         echo PHP_EOL;
    //     }
    // }

    $n = 4;
    for($i=$n,$fect=1; $i>1 ; $i--){
        $fect*=$i;
    }
    printf("fectorial of %d is %d",$n,$fect);


    














?>