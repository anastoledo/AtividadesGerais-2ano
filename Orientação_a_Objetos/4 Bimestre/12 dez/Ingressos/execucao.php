<?php

require_once("modelo/Ingresso.php");
require_once("modelo/IngressoVip.php");
require_once("modelo/IngressoCamarote.php");

//Ingresso
$i = new Ingresso();
$i->setValor(80.0);
print "O ingresso normal é R$" . number_format($i->getValorTotal(), 2, ',', '.') . "\n\n";

//Ingresso Vip
$iv = new IngressoVip();
$iv->setValor(80.0);
$iv->setValorAdicional(30.0);
print "O ingresso vip é R$" . number_format($iv->getValorTotal(), 2, ',', '.') . "\n\n";

//Ingresso Camarote
$ic = new IngressoCamarote();
$ic->setValor(80.0);
$ic->setValorAdicional(30.0);
$ic->setValorAdicionalCamarote(90.0);
print "O ingresso camarote é R$". number_format($ic->getValorTotal(), 2,",", ".") . "\n\n";