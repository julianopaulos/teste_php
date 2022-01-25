<?php
function SECULOANO(string $ano){
    $centenas = round($ano/100);
    $dezenas = (int) round(($ano%100)/10, 0, PHP_ROUND_HALF_DOWN);
    $unidades = (int) (($ano%100)%10);

    if($dezenas === 0 && $unidades === 0){
        $seculo = $centenas;
    }else{
        $seculo = $centenas+1;
    }

    return $seculo;
}