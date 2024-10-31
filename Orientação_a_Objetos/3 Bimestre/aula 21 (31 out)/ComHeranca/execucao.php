<?php

require_once("modelo/Aluno.php");
require_once("modelo/Professor.php");


//Aluno

$aluno = new Aluno();
$aluno->setMatricula(3255236377);
$aluno->setNome("Ana Júlia");
$aluno->setRg(42566267);
$aluno->setIdade(16);

print $aluno;
print $aluno->getNomeIdade() . "\n";

//Professor

$professor = new Professor();
$professor->setSalario(200000);
$professor->setNome("Daniel");
$professor->setRg(3567856969);
$professor->setIdade(26);

print $professor;