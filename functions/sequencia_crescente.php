<?php
function SEQUENCIACRESCENTE($array){

    if(count($array) === 1){
        return true;
    }
    $posicao_retirada = 0;
    $sequencial = false;
    while($posicao_retirada <= end($array) && $sequencial === false){

        $novoArray = $array;
        unset($novoArray[$posicao_retirada]);
        
        $posicao_retirada++;
        $menor = min($novoArray)-1;
        
        $sequencia = 0;
        foreach($novoArray as $num){
            if($num > $menor){
                $menor = $num;
                $sequencia++;
            }else{
                $sequencial = false;
                break;
            }
        }
        if($sequencia === count($novoArray)){
            $sequencial = true;
        }
    }
    return $sequencial;
}