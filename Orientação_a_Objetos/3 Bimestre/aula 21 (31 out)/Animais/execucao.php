<?php

require_once("modelo/Animal.php");
require_once("modelo/Cachorro.php");
require_once("modelo/Gato.php");

$gato1 = new Gato();
$gato1->setNome("Theo");
$gato1->setRaca("Siamês");
print $gato1->getDados();
print $gato1->Miar() . "\n\n";

$gato2 = new Gato();
$gato2->setNome("Frida");
$gato2->setRaca("Khao Manee");
print $gato2->getDados();
print $gato2->Miar() . "\n\n";

$cachorro1 = new Cachorro();
$cachorro1->setNome("Dino");
$cachorro1->setRaca("Vira-Lata");
print $cachorro1->getDados();
print $cachorro1->Latir() . "\n\n";

$cachorro2 = new Cachorro();
$cachorro2->setNome("Linguiça");
$cachorro2->setRaca("Fox Paulistinha");
print $cachorro2->getDados();
print $cachorro2->Latir() . "\n\n";


