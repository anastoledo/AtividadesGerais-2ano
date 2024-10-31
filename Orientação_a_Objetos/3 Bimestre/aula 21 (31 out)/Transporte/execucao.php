<?php

require_once("modelo/CarroPasseio.php");
require_once("modelo/Caminhao.php");
require_once("modelo/Onibus.php");

print "-- CARRO PASSEIO -- \n\n";
$carro = new CarroPasseio();
$carro->setModelo("Spin");
$carro->setVelocidadeMax("168km/h");
$carro->setCor("Branca");
$carro->setQtdPassageiros(7);
print $carro->getDados();

print "\n\n-- CAMINHÃO -- \n\n";
$caminhao = new Caminhao();
$caminhao->setModelo("Mercedes");
$caminhao->setVelocidadeMax("200km/h");
$caminhao->setCor("Preto");
$caminhao->setQtdCarga(200);
$caminhao->setAltura("3 metros");
print $caminhao->getDados();

print "\n\n-- ONIBUS --\n\n";
$onibus = new Onibus();
$onibus->setModelo("Leito cama");
$onibus->setVelocidadeMax("150km/h");
$onibus->setCor("Azul");
$onibus->setQtdPassageiros(25);
$onibus->setPesoMax("200kg");
print $onibus->getDados();