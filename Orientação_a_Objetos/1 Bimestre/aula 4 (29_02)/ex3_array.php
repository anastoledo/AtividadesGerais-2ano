<?php

$vetorA = array(1, 2, 3 ,4, 5);
$vetorB = array(1, 3, 5, 7, 9);
$vetorC = array();
$vetorD = array();

$vetorC = array_intersect($vetorA, $vetorB);

print "A intersecção entre o vetor A e o vetor B é: ";
foreach ($vetorC as $dados) {
    print "$dados" . " "  ;
}
print "\n";


$vetorD = array_merge($vetorA, $vetorB);

print "A união entre o vetor A e o vetor B é: ";
foreach ($vetorD as $dados) {
    print "$dados" . " ";
}