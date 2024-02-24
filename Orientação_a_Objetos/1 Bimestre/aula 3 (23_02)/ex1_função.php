<?php

//função

function verificaY($valorX) {

    $valorY = (5*$valorX) + (2*$valorX) + 3;
    print "O valor de Y é igual á $valorY\n";

}

//programa principal 

for ($i=0; $i < 5 ; $i++) { 
    $valorX = (int)readline("Informe um valor para o X: ");

    verificaY($valorX);
}