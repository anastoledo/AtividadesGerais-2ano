<?php

require_once("modelo/Time.php");
require_once("modelo/Jogador.php");

//Criar o objeto time!!!

$time = new Time();
$time -> setNome("Corinthians (Feminino)");
$time->setCidade("São Paulo");

//print_r($time);

//Criar o objeto jogador

$tamires = new Jogador();
$tamires ->setNome("Tamires");
$tamires->setNumero(9);
$tamires->setTime($time);

$marta = new Jogador();
$marta ->setNome("Marta");
$marta->setNumero(10);
$marta->setTime($time);

//print_r($jogadora);

//Imprimir o nome do time da jogadora

/*print $jogadora->getTime()->getNome() . "\n";
$t = $jogadora->getTime();
print $t->getCidade() . "\n";*/

$mulheres = array();
array_push($mulheres, $tamires);
array_push($mulheres, $marta);
$time->setJogadoras($mulheres);
print_r($time->getJogadoras());
