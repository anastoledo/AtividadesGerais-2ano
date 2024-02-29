<?php
    
$vetor1 = array();
$vetor2 = array();

for ($i=0; $i < 5; $i++) { 
    $respostaUser = readline("Informe uma palavra para adicionar no array: ");
    $vetor1[] = $respostaUser;
    print "\n";
}

$vetor2 = $vetor1;

foreach ($vetor2 as $vetor) {
    
    print $vetor .  ", ";
}

