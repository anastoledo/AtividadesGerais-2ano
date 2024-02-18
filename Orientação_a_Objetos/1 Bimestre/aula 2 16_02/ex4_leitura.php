<?php

$numImpar = 0;
$numPar = 0;

for ($i=0; $i < 10 ; $i++) { 
    $num = (int) readline("Informe 10 números: ");

    if ($num % 2 == 0) {

        $numPar = $numPar + 1;
    }
    else {

        $numImpar = $numImpar + 1;
    }

}

        print "A quantidade de números pares é igual á " . "$numPar " . " e a quantidade de números impares é igual á " . "$numImpar ";
