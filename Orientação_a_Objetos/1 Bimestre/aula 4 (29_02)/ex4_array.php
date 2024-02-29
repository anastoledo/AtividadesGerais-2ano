<?php

$vetor = array();

for ($i=0; $i < 10; $i++) { 
    $resposta = readline("Informe um elemento para adicionar no array: ");
    $vetor[] = $resposta;
    print "\n";
}

$maiorElemento = max($vetor);
$menorElemento = min($vetor);
print "O maior elemento do vetor é $maiorElemento e o menor é $menorElemento";