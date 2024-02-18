<?php

for ($i=1984; $i < 2024 ; $i++) { 
    if ($i % 4 == 0 && $i % 100 != 0) {
        print "$i é um ano bissexto!!" . "\n";

    } elseif ($i % 4 == 0 && $i % 400 == 0) {
        print "$i é um ano bissexto!!" . "\n";
    } 
}