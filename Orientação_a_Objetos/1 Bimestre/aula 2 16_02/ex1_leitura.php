<?php

$num = (int) readline ("Informe um número: ");

print "O número informado foi " . " $num " . "\n";

if ($num >= 0) {
    $num = $num * 2;
    print " O número é positivo! E o dobro é " . " $num " . "\n";
}
else {
    $num = $num * 3;
    print " O número é negativo! E o seu triplo é " . " $num " . "\n";
}