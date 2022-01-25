<?php
function BUSCADIFERENTES(){

    $arr = [];
    for($i = 0; $i < 20; $i++){
        $arr[] = rand(1, 10);
    }

    $numeros = [];
    for($i = 0; $i< count($arr); $i++){
        $numeros[$arr[$i]] = 0;
    }

    for($i = 0; $i< count($arr); $i++){
        $numeros[$arr[$i]] += 1;
    }

    $nao_repetidos = [];
    foreach($numeros as $key => $num){
        if($num === 1){
            $nao_repetidos[] = $key;
        }
    }

    return $nao_repetidos;
}