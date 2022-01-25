<?php
namespace Functions;
class Utils {
    public function SECULOANO(string $ano){
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

    public function PRIMOS(int $inicial, int $final){
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

    public function BUSCADIFERENTES(){

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

    public function SEQUENCIACRESCENTE($array){
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
}