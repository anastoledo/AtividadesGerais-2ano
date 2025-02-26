<?php

require_once("modelo/Residencial.php");
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");

$escolha = 0;

do {
    print "\n * -------- MENU ------------------* \n";
    print " 1 -------- RESIDENCIAL -----------* \n";
    print " 2 -------- COMERCIAL -------------*\n";
    print " 3 -------- INDUSTRIAL ------------*\n";
    print " 0 -------- SAIR ------------------* \n";

    $escolha = readline("Qual o tipo do seu consumo? ");

    switch ($escolha){

        case 0:
            print "SAINDOOO...\n";
            break;

        case 1:
            print "\n\n RESIDENCIAL \n\n";

            $consumo = new Residencial();
            $consumo->setConsumo(readline("Informe quantos KWh foram consumidos: "));
            print "Calculando valor...\n\n";
            break;

        
        case 2: 
            print "\n\n COMERCIAL \n\n";
            
            $consumo = new Comercial();
            $consumo->setConsumo(readline("Informe quantos KWh foram consumidos: "));
            print "Calculando valor...\n\n";
            break;

        case 3:
            print "\n\n INDUSTRIAL \n\n";

            $consumo = new Industrial();
            $consumo->setConsumo(readline("Informe quantos KWh foram consumidos: "));
            print "Calculando valor...\n\n";
            break;

        default:
            print "ERRO ERRO!!";
            break;
    }

    sleep(2);
    print "O valor da fatura será de R$" . $consumo->getValorFatura() . "\n\n";

} while ($escolha !=0);
