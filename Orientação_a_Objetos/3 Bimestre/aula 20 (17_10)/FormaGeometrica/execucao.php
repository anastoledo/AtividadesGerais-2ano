<?php 

require_once("modelo/Circulo.php");
require_once("modelo/Retangulo.php");
require_once("modelo/Quadrado.php");

$escolha = 0;

do {
    print "\n * -------- MENU ------------* \n";
    print " 1 -------- CIRCULO ---------* \n";
    print " 2 -------- QUADRADO ----------*\n";
    print " 3 -------- RETANGULO ------------*\n";
    print " 0 -------- SAIR --------------* \n";

    $escolha = readline("De qual serviço você precisa? ");

    switch ($escolha){

        case 0:
            print "SAINDOOO...\n";

        case 1:
            print "\n\n CIRCULO \n\n";

            $figura = new Circulo();
            $figura->setRaio(readline("Informe o raio desse circulo: "));
            break;

        
        case 2: 
            print "\n\n QUADRADO \n\n";

            $figura = new Quadrado();
            $figura->setlado(readline("Informe o lado desse quadrado: "));
            
            break;

        case 3:
            print "\n\n RETANGULO \n\n";

            $figura = new Retangulo();
            $figura->setBase(readline("Informe a base desse retangulo: "));
            $figura->setAltura(readline("Informe a altura desse retangulo: "));

            break;

        default:
            print "ERRO ERRO!!";
            break;
    }

    print $figura->getArea() . "\n\n";
    print $figura->getDesenho();

} while ($escolha !=0);