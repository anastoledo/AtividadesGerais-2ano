<?php 

require_once("modelo/Produto.php");
require_once("modelo/Livro.php");
require_once("modelo/Computador.php");
require_once("modelo/Balde.php");

$p = new Produto();
$p->setDescricao("Tenis de rodinha");
$p->setUnidadeMedida("Paris Point");
print $p->getDados();

$l = new Livro();
$l->setDescricao("Vidas Secas");
$l->setUnidadeMedida("Centímetros");
$l->setAutor("Graciliano Ramos");
print $l->getDados();

$c = new Computador();
$c->setDescricao("Lenovo Ideapad 3");
$c->setUnidadeMedida("Polegadas");
$c->setProcessador("Intel i5");
$c->setMemoria(8);
print $c->getDados();

$b = new Balde();
$b->setDescricao("Balde de Plastico");
$b->setUnidadeMedida("Litros");
$b->setCapacidade(10);
print $b->getDados();
