<?php

//funções

//função área do retângulo

function area($base, $altura){
    $area = $base * $altura;
    printf("A área é igual a %.2fcm\n" , $area);
}

//função perímetro retângulo

function perimetro($lado){
    $perimetro = $lado + $lado + $lado + $lado;
    printf("O perímetro é igual a %.2fcm\n" , $perimetro);
}

//programa principal


    for ($i=0; $i < 3; $i++) { 
        $base = (float)readline("Informe um valor para base: ");
        $altura = (float)readline("Informe um valor para a altura: ");
        $lado = (float)readline("Informe um valor para o lado: ");

             area($base, $altura);
            perimetro($lado);
    }
