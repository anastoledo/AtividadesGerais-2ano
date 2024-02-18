<?php

$multiplicando = (int)readline("Informe um número para ser o multiplicando: ");
$multiplicador = (int)readline("Informe outro número para ser o multiplicador: ");
$produto = 0;

for ($i=0; $i < $multiplicador ; $i++) { 

    $produto = $produto + $multiplicando;
}

        print "A multiplicação de" . " $multiplicando" . " X" . " $multiplicador" . " é igual á" . " $produto";