<?php

function CalcularArea (array $vetor) {
    $area = $vetor["base"] * $vetor["altura"];
    return $area;
}

$retangulo = array();

for ($i=0; $i < 5 ; $i++) { 
    $base = readline("Informe um valor para a base: ");
    $altura = readline("Informe um valor para a altura: ");

    $ret = array();
    $ret ["base"] = $base;
    $ret ["altura"] = $altura;
    array_push($retangulo, $ret);

}
foreach ($retangulo as $r) {
  $area = CalcularArea($r);
   printf ("O retângulo %dcm X %dcm tem área de %dcm²!\n" , $r["base"], $r["altura"], $area);
}


