<?php

require_once("modelo/Ingresso.php");
require_once("modelo/IngressoVip.php");
require_once("modelo/IngressoCamarote.php");

$i = new Ingresso();
$i->setValor(50.0);
print "O ingresso normal é R$" . number_format($i->getValor(), 2, ',', '.') . "\n\n";

$iv = new IngressoVip();
$iv->setValor(50.0);
$iv->setValorAdicional(30.0);
print "O ingresso vip é R$" . number_format($iv->getValorTotal(), 2, ',', '.') . "\n\n";

$ic = new IngressoCamarote();
$ic->setValor(50.0);
$ic->setValorAdicional(30.0);
$ic->setValorAdicionalCamarote(70.0);
print "O ingresso camarote é R$". number_format($ic->getValorTotal(), 2,",", ".") . "\n\n";