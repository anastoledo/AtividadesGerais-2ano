<?php

require_once("modelo/Curandeiro.php");
require_once("modelo/Combatente.php");
require_once("modelo/Mago.php");

//1 - Criar os objetos Poder
$p1 = New Poder("Recupera energia", 0);
$p2 = New Poder("Recupera energia super ", 20);
$p3 = New Poder("Golpe normal ", 0);
$p4 = New Poder("Golpe especial", 15);

//2 - Criar os objetos Magos

$c = New Curandeiro;
$c->setNome("AAAAAA");
$c->setPoder($p2);
$c->setForcaDeCura(100);
print $c->lancarPoder();

$com = New Combatente;
$com->setNome("BBBBBB");
$com->setPoder($p3);
$com->setForcaDeAtaque(200);
print $com->lancarPoder();