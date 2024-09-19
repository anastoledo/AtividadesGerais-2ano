<?php

require_once("modelo/Estado.php");
require_once("modelo/Cidade.php");

//Classe estado

$sc = new Estado();
$sc->setNome("Santa Catarina");
$sc->setSigla("SC");


$pr = new Estado();
$pr ->setNome("Paraná");
$pr -> setSigla("PR");


$arrayCidades = array();

$blumenau = new Cidade();
$blumenau->setNome("Blumenau");
$blumenau->setQtdHabitantes(351885);
$blumenau->setAltitude(21);
$blumenau->setEstado($sc);
array_push($arrayCidades, $blumenau);

$florianopolis = new Cidade();
$florianopolis->setNome("Florianópolis");
$florianopolis->setQtdHabitantes(537211);
$florianopolis->setAltitude(674.844);
$florianopolis->setEstado($sc);
array_push($arrayCidades, $florianopolis);

$foz = new Cidade();
$foz->setNome("Foz do Iguaçu");
$foz->setQtdHabitantes(25848);
$foz->setAltitude(164);
$foz->setEstado($pr);
array_push($arrayCidades, $foz);

$cascavel = new Cidade();
$cascavel->setNome("Foz do Iguaçu");
$cascavel->setQtdHabitantes(25848);
$cascavel->setAltitude(164);
$cascavel->setEstado($pr);
array_push($arrayCidades, $cascavel);

foreach ($arrayCidades as $c) {
    sleep(3);
    print $c;
}


