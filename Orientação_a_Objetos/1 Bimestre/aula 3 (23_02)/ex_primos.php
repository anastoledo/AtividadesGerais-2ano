<?php

//funçaõ

function verificaPrimo ($num) {

$teste = 1;
$divisores = 0;

if ($num > 1) {
    while ($teste <= $num) {
        if ($num % $teste == 0) {
            $divisores++;
        }
        $teste++;
    }
    if ($divisores == 2) {
        print "O número $num é primo!\n ";
    }
    else {
        print "O número $num não é primo!\n ";
    }
}

else {
    print "Esse número é menor que 2!! ";
    die();
}

}


//programa principal

$pergunta = readline("Quantos números você deseja informar?\n ");

    for ($i=0; $i < $pergunta ; $i++) { 
        $num = readline("Informe um número:\n ");
        verificaPrimo($num);
    }


