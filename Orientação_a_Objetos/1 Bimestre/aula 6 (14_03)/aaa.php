<?php

/*Imprime vetor*/
function imprimeVetor($vetor) {
    foreach($vetor as $v) {
        echo $v . ", ";
    }
    print "\n";
}
 

/*Função Fahrenheit*/
function vetor1 ($vetor) {
    $vet1 = array();
    foreach ($vetor as $c) {
    $f = ($c*1.8)+32;
    array_push($vet1, $f);
    }
    return $vet1;

}

function vetor2 ($num) {
    

}

/*Função para calcular a função*/
function vetor3 ($vetor) {
    $vet3 = array();
    foreach ($vetor as $x) {
    $f = ($x*$x) + (2*$x) + 4;
    array_push($vet3, $f);
    }
    return $vet3;

}

/*Programa Principal*/

$vetPrincipal = array();
print ("Informe os elementos do array principal: \n");
for($i=0; $i<5; $i++) {
    $num = readline("Informe um número: ");
    array_push($vetPrincipal, $num);
}

    $vet1 = vetor1($vetPrincipal);
    print ("O valor do vetor 1 é igual: ");
    imprimeVetor($vet1);

    print "\n";

    $vet2;


    print "\n";

    $vet3 = vetor3($vetPrincipal);
    print ("O valor do vetor 3 é igual: ");
    imprimeVetor($vet3);



