<?php

require_once("modelo/Midia.php");
require_once("modelo/CD.php");
require_once("modelo/DVD.php");

$listaMidias = array();

for ($i=0; $i < 5; $i++) { 

    $escolha = readline("Informe o tipo da mídia: | 1 - CDs ou 0 - DVDs: ");

    if ($escolha == 1) {
        $cd = new CD();
        $cd->setDescricao(readline("Informe a descrição do CD: "));
        $cd->setPrecoPago(readline("Informe o preço do CD: "));
        array_push($listaMidias , $cd);
    }

    else{
        $dvd = new DVD();
        $dvd->setDescricao(readline("Informe a descrição do DVD: "));
        $dvd->setPrecoPago(readline("Informe o preço do DVD: "));
        array_push($listaMidias , $dvd);
    }
}

print "---- LISTA DE MÍDIAS ----\n\n";
foreach ($listaMidias as $midia) {
    print $midia->getTipo() . "-" . $midia->getDados();
}