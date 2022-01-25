<?php

function PRIMOS(int $inicial, int $final){
    $primos = [];
    for($i = $inicial+1; $i <= $final-1; $i++){

        $divisores = 0;

        for($j = $i; $j >= 1; $j--){
            
            if($i % $j === 0){
                $divisores++;
            }
        }
        if($divisores === 2){
            $primos[] = $i;
        }
    }
    return $primos;
}