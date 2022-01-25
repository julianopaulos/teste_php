<?php
function SEQUENCIACRESCENTE($array){
    $todos_iguais = true;
    $primeira_posicao = $array[0];
    for($i=0;$i < count($array);$i++){
        if($primeira_posicao !== $array[$i]){
            $primeira_posicao = false;
            break;
        }
    }
    if(count($array) === 1 || $todos_iguais){
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