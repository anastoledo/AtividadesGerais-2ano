<?php 

require_once("modelo/Soma.php");
require_once("modelo/Subtracao.php");
require_once("modelo/Multiplicacao.php");
require_once("modelo/Divisao.php");
require_once("modelo/Resto.php");

$opcao = 0;

do {
    
    print "\n\n------MENU------\n";
    print "1- SOMA\n";
    print "2- SUBTRAÇÃO\n";
    print "3- MULTIPLICAÇÃO\n";
    print "4- DIVISÃO\n";
    print "5- RESTO\n";

    $opcao = readline("Informe que a operação: ");
    print "\n";

    switch ($opcao) {

        case 1:
            
            $soma = new Soma();
            $soma->setNumA(readline("Informe o primeiro número: "));
            $soma->setNumB(readline("Informe o segundo número: "));

            if ($soma->getNumA() == 0 && $soma->getNumB() == 0) {
                print "Os dois números não podem ser 0 \n";
                die;
            }

            else{
                print "O resultado da soma é: " . $soma->Calcular() . "\n\n";
                break;
            }

        case 2:
            
            $subtracao = new Subtracao();
            $subtracao->setNumA(readline("Informe o primeiro número: "));
            $subtracao->setNumB(readline("Informe o segundo número: "));
    
            if ($subtracao->getNumA() == 0 && $subtracao->getNumB() == 0) {
                print "Os dois números não podem ser 0 \n";
                die;
            }
    
            else{
                print "O resultado da subtração é: " . $subtracao->Calcular() . "\n\n";
                break;
                }

        case 3:
            
            $multiplicacao = new Multiplicacao();
            $multiplicacao->setNumA(readline("Informe o primeiro número: "));
            $multiplicacao->setNumB(readline("Informe o segundo número: "));
        
                if ($multiplicacao->getNumA() == 0 && $multiplicacao->getNumB() == 0) {
                    print "Os dois números não podem ser 0 \n";
                    die;
                }
        
                else{
                    print "O resultado da multiplicação é: " . $multiplicacao->Calcular() . "\n\n";
                    break;
                }

        case 4:
            
            $divisao = new Divisao();
            $divisao->setNumA(readline("Informe o primeiro número: "));
            $divisao->setNumB(readline("Informe o segundo número: "));
            
                if ($divisao->getNumA() == 0 && $divisao->getNumB() == 0) {
                    print "Os dois números não podem ser 0 \n";
                    die;
                }
            
                else{
                    print "O resultado da divisão é: " . $divisao->Calcular() . "\n\n";
                    break;
                }

        case 5:
            
            $resto = new Resto();
            $resto->setNumA(readline("Informe o primeiro número: "));
            $resto->setNumB(readline("Informe o segundo número: "));
                
                if ($resto->getNumA() == 0 && $resto->getNumB() == 0) {
                    print "Os dois números não podem ser 0 \n";
                    die;
                }
                
                else{
                    print "O resultado do resto é: " . $resto->Calcular() . "\n\n";
                    break;
                }

                
        default:
                print "OPÇÃO INVÁLIDA!";
            break;
    }

} while ($opcao != 0);
