<?php 

require_once("modelo/Carro.php");
require_once("modelo/Van.php");
require_once("modelo/MicroOnibus.php");
require_once("modelo/Onibus.php");

$opcao = 0;

do {
    
    print "\n\n------MENU------\n";
    print "1- CARRO\n";
    print "2- VAN\n";
    print "3- MICRO-ÔNIBUS\n";
    print "4- ÔNIBUS\n";
    print "0 - SAIR\n";

    $opcao = readline("Informe o tipo do veículo: ");
    print "\n";

    switch ($opcao) {
        case 1:
            
            $carro = new Carro();
            $carro->setValorAluguel(readline("Informe o valor do aluguel: "));
            $carro->setQuilometros(readline("Informe quantos quilometros foram rodados: "));
            print $carro;
            break;
        case 2: 
            $van = new Van();
            $van->setValorAluguel(readline("Informe o valor do aluguel: "));
            $van->setQuilometros(readline("Informe quantos quilometros foram rodados: "));
            print $van;
            break;

        case 3:
            $microonibus = new MicroOnibus();
            $microonibus->setValorAluguel(readline("Informe o valor do aluguel: "));
            $microonibus->setQuilometros(readline("Informe quantos quilometros foram rodados: "));
            print $microonibus;
            break;

        case 4:
            $onibus = new Onibus();
            $onibus->setValorAluguel(readline("Informe o valor do aluguel: "));
            $onibus->setQuilometros(readline("Informe quantos quilometros foram rodados: "));
            print $onibus;
            break;

        case 0:
            print "Obrigado por utilizar o sistema de aluguel de veículos!\n";
            
        default:
            print "Opção inválida";
            break;
    }


} while ($opcao != 0);

