<?php

require_once("modelo/Turma.php");
require_once("modelo/Alunos.php");

$turma = new Turma();
$turma->setNome("2 ano");
$turma->setCurso("TDS");

$arrayAlunos = array();

for ($i=0; $i < 5; $i++) { 
    $alunos = new Alunos();
    $alunos->setNome(readline("Informe o nome do aluno: "));
    $alunos->setIdade(readline("Informe a idade do aluno: "));
    $alunos->setTurma($turma);
    array_push($arrayAlunos, $alunos);
}

$turma->setAlunos($arrayAlunos);
