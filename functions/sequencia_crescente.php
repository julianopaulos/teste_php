<?php
function SEQUENCIACRESCENTE($array){
    if(count($array) === 1){
        return true;
    }
    $sequencial = true;
    $menor = min($array)-1;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $menor){
            $menor = $array[$i];
        }else{
            $sequencial = false;
            break;
        }
    }
    return $sequencial;
}