<?php
require_once "./functions/functions.php";
require_once "./functions/busca_numeros_diferentes.php";
require_once "./functions/numeros_primos.php";
require_once "./functions/seculoano.php";
require_once "./functions/sequencia_crescente.php";
//use Functions\Utils;

//$functions = new Utils();
//var_dump($functions->SECULOANO(101));

//var_dump($functions->PRIMOS(10, 29));


//var_dump($functions->BUSCADIFERENTES());

//var_dump($functions->SEQUENCIACRESCENTE([-1, 3, 4, 5]));

var_dump(SECULOANO(101));
var_dump(PRIMOS(10, 29));
var_dump(BUSCADIFERENTES());
var_dump(SEQUENCIACRESCENTE([123, -17, -5, 1, 2, 3, 12, 43, 45]));