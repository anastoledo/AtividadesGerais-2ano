<?php

//função

function imprimeDados ($nome, $habitantes, $area, $altitude, $estado) {

    printf("%s | %d | %dkm | %dm | %s ", $nome,  $habitantes, $area, $altitude, $estado);
   

}

//programa principal

$nome = (string)readline("Informe o nome da cidade: ");
$habitantes = (int)readline("Informe o número de habitantes: ");
$area = (int)readline("Informe a área: ");
$altitude = (int)readline("Informe a altitude: ");
$estado = (string)readline("Informe a sigla do estado: ");

imprimeDados($nome, $habitantes, $area, $altitude, $estado);
