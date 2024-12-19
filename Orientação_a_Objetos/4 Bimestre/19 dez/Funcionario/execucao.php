<?php 

require_once("modelo/Gerente.php");
require_once("modelo/Desenvolvedor.php");
require_once("modelo/Estagiario.php");

$opcao = 0;

do {
    
    print "\n\n------MENU------\n";
    print "1 - GERENTE\n";
    print "2 - DESENVOLVEDOR\n";
    print "3 - ESTAGIÁRIO\n";
    print "0 - SAIR\n";
    print "----------------\n\n";

    $opcao = readline("Informe o número do funcionário que você deseja: ");
    print "\n";

    switch($opcao) {

        case 1:
            $gerente = new Gerente();
            $gerente->setNome(readline("Informe o nome do gerente: "));
            print "\n";
            print $gerente;
            print "***************************************************************";
            break;

        case 2: 

            $desenvolvedor = new Desenvolvedor();
            $desenvolvedor->setNome(readline("Informe o nome do desenvolvedor: "));
            print "\n";
            print $desenvolvedor;
            print "***************************************************************";
            break;

        case 3:
            
            $estagiario = new Estagiario();
            $estagiario->setNome(readline("Informe o nome do estagiário: "));
            print "\n";
            print $estagiario;
            print "***************************************************************";
            break;

        case 0:
            print "Obrigado por utilizar o sistema de funcionários!\n";
            break;
            
        default:
            print "Opção inválida";
            break;
    }

} while ($opcao != 0);