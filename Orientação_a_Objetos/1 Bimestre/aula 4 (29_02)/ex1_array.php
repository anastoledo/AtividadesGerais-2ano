<?php
    

$vetor = [];

for ($i=0; $i < 10; $i++) { 
    $respostaUser = readline("Informe um número: ");
    $vetor[] = $respostaUser;
    print "\n";
}

    print "\n";

    print_r ($vetor);
    print " ";
    
    $soma = array_sum($vetor);

    $media = $soma/10;

    print "A média aritimética desse vetor é $media\n";
   
