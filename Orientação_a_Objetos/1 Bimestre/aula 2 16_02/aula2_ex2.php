<?php

$numero = readline("Informe um valor! ");

for ($i=$numero-1; $i >= 1 ; $i--) { 
   if ($i > 1) {
    print "$i" . ", ";
   }
   else {
    print "$i" . "\n";
   }
   
}