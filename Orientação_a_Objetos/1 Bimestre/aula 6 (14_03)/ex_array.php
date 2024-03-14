<?php

$primos = [];

$num = 1;

while ($num !=0) {
    
    $num = readline("Informe um número: ");

    $teste = 1;
    $divisores = 0;

    if ($num > 0) {
        while ($teste <= $num) {
            if ($num % $teste == 0) {
                $divisores++;
            }
            $teste++;
        }
        if ($divisores == 2) {
            array_push($primos, $num);
        }
    } 
    else {
        print "Esse número é menor que 1!!\n";
        print "\n";
        print "Os números primos são:\n";
        foreach ($primos as $resultados) {
            print "$resultados\n";
        }
    }
   
}


    










