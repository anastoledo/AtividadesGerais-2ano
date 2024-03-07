<?php

$vetor = [];

for ($i=0; $i < 10; $i++) { 
    $respostaUser = readline("Informe um número: ");
    $vetor[] = $respostaUser;
    print "\n";
}

    print "\n";

    $soma = 0;
    $aux = $soma;

    foreach ($vetor as $soma) {
        $aux = $aux + $soma;
        $soma = $aux;
    }

    $media = $soma/10;

    print "A média aritimética desse vetor é $media\n";
   
