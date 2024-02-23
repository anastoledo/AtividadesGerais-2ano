<?php

//função

function fatorial ($num){
    $aux = 1;
    for ($i=$num; $i > 0 ; $i--) { 
        $aux = $aux * $i;
    }
    return $aux;
}

// programa principal 

do{
    $num = (int)readline ("Informe um número: ");

    if ($num != 0) {
        $fatorial = fatorial($num);
        print "O fatorial é: " . $fatorial . "\n ";
    }
   
} while ($num != 0);
 
