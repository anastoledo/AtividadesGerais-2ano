<?php 

require_once("modelo/Exemplo.php");

$e = new Exemplo();
$e->escreva();
$e->escreva(123);
$e->escreva(123, 456);