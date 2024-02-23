<?php

for ($i=0 ; $i < 5; $i++) { 

    $nome = readline("Informe o nome de uma pessoa! ");
    $altura = (float) readline ("Infome a altura da pessoa! (m) ");
    $peso = (int) readline ("Informe o peso da pessoa! (kg) ");

    $imc = $peso / ($altura*$altura);

    printf("%s tem peso %dkg, altura %.2fm e IMC %.2f\n", $nome, $peso, $altura, $imc);

}