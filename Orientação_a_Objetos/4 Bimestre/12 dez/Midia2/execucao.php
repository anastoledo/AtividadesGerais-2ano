<?php 

require_once("modelo/CD.php");
require_once("modelo/DVD.php");

$cd = new CD();
$cd->setNome("CD de Teste");
$cd->setPreco(12);
print $cd->getTipo(). " - " . $cd . "\n";

$dvd = new DVD();
$dvd->setNome("DVD de Teste");
$dvd->setPreco(15);
print $dvd->getTipo() . " - " . $dvd . "\n";