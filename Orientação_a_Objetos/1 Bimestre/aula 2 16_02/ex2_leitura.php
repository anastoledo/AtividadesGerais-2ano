<?php

$quantidadeAlunos = (int) readline("Há quantos alunos na turma? ");
$aux = (float) 0;

for ($i=0; $i < $quantidadeAlunos; $i++) { 

    $contribuir = (float) readline("Com quanto você pode contribuir? ");

    if ($contribuir == 0) {
        print "O valor arrecadado será de R$ " . $aux;
        die();
    }

    else {
        $aux = $aux + $contribuir;
    }
   
   
}

    print "O valor arrecadado será de R$ " . $aux;


