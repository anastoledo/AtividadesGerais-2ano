<?php

require_once("modelo/Atleta.php");
require_once("modelo/Pais.php");

//classe pais

$br = new Pais();
$br->setNome("Brasil");
$br->setContinente("América do Sul");

$eua = new Pais();
$eua->setNome("Estados Unidos da América");
$eua->setContinente("América do Norte");

$arrayAtletas = array();

$rebeca = new Atleta();
$rebeca->setNome("Rebeca Andrade");
$rebeca->setIdade(25);
$rebeca->setEsporte("Ginástica");
$rebeca->setPais($br);
array_push($arrayAtletas, $rebeca);

$cesar = new Atleta();
$cesar->setNome("César Cielo");
$cesar->setIdade(37);
$cesar->setEsporte("Natação");
$cesar->setPais($br);
array_push($arrayAtletas, $cesar);

$simone = new Atleta();
$simone->setNome("Simone Biles");
$simone->setIdade(27);
$simone->setEsporte("Ginástica");
$simone->setPais($eua);
array_push($arrayAtletas, $simone);

$michael = new Atleta();
$michael->setNome("Michael Phelps");
$michael->setIdade(39);
$michael->setEsporte("Natação");
$michael->setPais($eua);
array_push($arrayAtletas, $michael);

print "\n\n ---ATLETAS---\n";

foreach ($arrayAtletas as $a) {
    sleep(2);
    print $a;
}
