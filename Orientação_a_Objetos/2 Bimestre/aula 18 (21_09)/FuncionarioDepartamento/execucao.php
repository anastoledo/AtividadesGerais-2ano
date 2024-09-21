
<?php

require_once("modelo/Departamento.php");
require_once("modelo/Funcionario.php");

$arrayFuncionarios = array();

for ($i=0; $i < 5 ; $i++) { 
    $dept = new Departamento();
    $dept->setNome(readline("Qual o nome do departamento: "));
    $dept->setNumSala(readline("Qual o número da sala: "));

    $func = new Funcionario();
    $func->setNome(readline("Qual o nome do funcionário: "));
    $func->setCargo(readline("Qual o cargo do funcionário "));
    $func->setSalario(readline("Qual o salário do funcionário: "));
    $func->setDepartamento($dept);

    array_push($arrayFuncionarios, $func);
}

print "--- LISTA FUNCIONÁRIOS ---\n\n";

foreach ($arrayFuncionarios as $i => $f) {
    print "Funcionário " . $i + 1 . " - " . $f;
}