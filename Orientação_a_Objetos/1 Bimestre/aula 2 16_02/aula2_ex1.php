<?php

for ($i=0; $i < 10; $i++) { 

    $numero = readline("Informe 10 números! ");

    if ($numero >= 0) {
        print "$numero" . " é positivo!\n ";
    }
    else {
        print "$numero" . " é negativo!\n ";
    }   
}
