<?php

//funções

function area($raio){
    $calcular = 0;

    $calcular = $raio * 3.14 * $raio;

    printf ("O raio é igual a %.2f\n" , $calcular );
}

function circunferencia ($raio){
    $calcular = 0;

    $calcular = 2 * 3.14 * $raio;

    printf ("E a circunferencia é igual a %.2f\n" , $calcular );
}

//programa principal

for ($i=0; $i < 3 ; $i++) { 
    $valor = (float)readline("Informe um valor! ");

    area ($valor);

    circunferencia ($valor);
}