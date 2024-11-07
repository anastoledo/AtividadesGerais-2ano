<?php

require_once("modelo/PessoaFisica.php");
require_once("modelo/PessoaJuridica.php");

function listarPessoas(array $pessoas) {
    print "PESSOAS CADASTRADAS\n\n";

    foreach($pessoas as $i => $p) {
        print ($i + 1) . "- " . $p; 
    }

}

$opcao = 0;
$pessoas = array();

do {
    print "\n\n------MENU------\n";
    print "1- CADASTRO PESSOA FÍSICA\n";
    print "2- CADASTRO PESSOA JURIDICA\n";
    print "3- LISTAR\n";
    print "4- EXCLUIR\n";
    print "0- SAIR\n";

    $opcao = readline("Informe a opção: ");
    echo "\n";
    switch ($opcao) {
        case 1:
            $p = new PessoaFisica();
            $p->setNome(readline("Informe o nome: "));
            $p->setIdade(readline("Informe a idade: "));
            $p->setCpf(readline("Informe o CPF: "));

            array_push($pessoas, $p);
            break;

        case 2:
            $p = new PessoaJuridica();
            $p->setNome(readline("Informe o nome: "));
            $p->setNomeFantasia(readline("Informe o nome fantasia: "));
            $p->setCnpj(readline("Informe o CNPJ: "));

            array_push($pessoas, $p);
            break;

        case 3:
            listarPessoas($pessoas);
            break;

        case 4:
            listarPessoas($pessoas);

            $indiceRemover = readline("Informe o índice da pessoa a ser excluída: ");
            $indiceRemover--;

            if($indiceRemover >= 0 && $indiceRemover <= count($pessoas))
                array_splice($pessoas, $indiceRemover, 1);
            else
                print "REMOÇÃO INVÁLIDA!\n";
            break;

        case 0:
            print "ENCERRANDO O PROGRAMA...\n";
            break;

        default:
            print "Opção inválida\n";            
    }
} while ($opcao != 0);