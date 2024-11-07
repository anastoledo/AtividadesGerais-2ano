<?php

require_once("modelo/Hotel.php");
require_once("modelo/PontoTuristico.php");
require_once("modelo/Restaurante.php");

function listarEspacos(array $espacos) {
    print "ESPAÇOS CADASTRADOS\n\n";

    foreach($espacos as $i => $e) {
        if ($e instanceof Hotel) {
            print ($i + 1) . "- " . $e->getDadosHotel(); 
        }
        elseif($e instanceof Restaurante){
            print ($i + 1) . "- " . $e->getDadosRestaurante();
        }
        elseif($e instanceof PontoTuristico){
            print ($i + 1) . "- " . $e->getDadosPontoTuristico();
        }
    }

}

$opcao = 0;
$espacos = array();

do {
    print "\n\n------MENU------\n";
    print "1- CADASTRAR ESPAÇO\n";
    print "2- EXCLUIR\n";
    print "3- LISTAR\n";
    print "0- SAIR\n";

    $opcao = readline("Informe a opção: ");
    print "\n";
    switch ($opcao) {
        case 1:

            print "\n\n------ESPAÇOS------\n";
            print "1- HOTEL\n";
            print "2- RESTAURANTE\n";
            print "3- PONTO TURISTICO\n";

            $tipo = readline("Qual o tipo de espaço? ");
            print "\n";

            switch ($tipo) {
                case 1:
                     $h = new Hotel();
                     $h->setNome(readline("Informe o nome do hotel: "));
                     $h->setEndereco(readline("Informe o endereço do hotel: "));
                     $h->setNumeroEstrelas(readline("Informe o número de estrelas: "));
                     $possuiCafe = "O café é incluso? (1 para SIM e 0 para NÂO): ";

                     if ( $possuiCafe = 1) {
                        $h->setCafeIncluso(true);
                    }
                     else{
                        $h->setCafeIncluso(false);
                    }
                    
                    array_push($espacos, $h);
                    break;
              
                case 2: 
                    $r = new Restaurante();
                    $r->setNome(readline("Informe o nome do restaurante: "));
                    $r->setEndereco(readline("Informe o endereço do restaurante: "));
                    $r->setTipoComida(readline("Qual o tipo da comida: "));
                    array_push($espacos, $r);
                    break;

                case 3:
                    $p = new PontoTuristico();
                    $p->setNome(readline("Informe o nome do ponto turistico: "));
                    $p->setEndereco(readline("Informe o endereço do ponto turistico: "));
                    $p->setDuracaoDaVisita(readline("Informe o tempo de duração da visita: "));
                    array_push($espacos, $p);
                    break;
            }

            break;

        case 2:
            listarEspacos($espacos);

            $indiceRemover = readline("Informe o índice da pessoa a ser excluída: ");
            $indiceRemover--;

            if($indiceRemover >= 0 && $indiceRemover <= count($espacos))
                array_splice($espacos, $indiceRemover, 1);
            else
                print "REMOÇÃO INVÁLIDA!\n";
            break;

        case 3:
            listarEspacos($espacos);
            break;

        case 0:
            print "ENCERRANDO O PROGRAMA...\n";
            break;

        default:
            print "Opção inválida\n";            
    }

} while ($opcao != 0);