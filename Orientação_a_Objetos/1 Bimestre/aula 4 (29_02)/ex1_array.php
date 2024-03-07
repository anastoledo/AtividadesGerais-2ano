<?php
    

$vetor = [];

for ($i=0; $i < 10; $i++) { 
    $num = readline("Informe um número: ");
    $vetor[] = $num;
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
   
