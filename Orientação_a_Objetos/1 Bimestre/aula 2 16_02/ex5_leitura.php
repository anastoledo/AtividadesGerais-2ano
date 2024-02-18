<?php

$num1 = (int)readline("Informe um número: ");
$num2 = (int)readline("Informe outro número: ");

for ($i=$num1 + 1; $i < $num2 ; $i++) { 
    if ($i % 5 == 0) {
        print "$i" . " é divisível por 5 \n";
    }
}