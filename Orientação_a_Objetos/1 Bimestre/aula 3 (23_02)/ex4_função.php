<?php

//função

function médiaPonderada ($a , $b, $c){
    $formula = (($a*3) + ($b*5) + ($c*2))/10;

    print ("O resultado é igual á $formula");
}

//programa principal

$a = (int)readline("Informe um valor para A: ");
$b = (int)readline("Informe um valor para B: ");
$c = (int)readline("Informe um valor para C: ");

médiaPonderada($a,$b,$c);