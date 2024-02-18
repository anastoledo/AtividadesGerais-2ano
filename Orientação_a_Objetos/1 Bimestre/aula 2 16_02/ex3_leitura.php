<?php

$a = (int)readline("Informe um número: ");
$b = (int)readline("Informe um número: ");
$c = (int)readline("Informe um número: ");

if ($a > $c && $b > $c) {
    print "O menor número é o " . "$c";
}
elseif ($b > $a && $c > $a) {
    print "O menor número é o " . "$a";
}
else{
    print "O menor número é o " . "$b";
}