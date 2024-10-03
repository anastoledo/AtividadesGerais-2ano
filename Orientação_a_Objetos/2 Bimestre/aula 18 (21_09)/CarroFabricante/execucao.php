<?php

require_once("modelo/Carro.php");
require_once("modelo/Fabricante.php");

//Função que busca o fabricante pela sigla no array, retornando-o
function retornaFabricante($fabricanteArray, $sigla) {
    //Encontra o fabricante no array
    foreach($fabricanteArray as $f) {
        if($sigla == $f->getSigla())
            return $f;
        
    }

    return null;
}

$fabricanteArray = array();
$carroArray = array();

$vw = new Fabricante();
$vw->setNome("Volkswagem");
$vw->setSigla("VW");
array_push($fabricanteArray, $vw);

$gm = new Fabricante();
$gm->setNome("Chevrolet");
$gm->setSigla("GM");
array_push($fabricanteArray, $gm);

$f = new Fabricante ();
$f->setNome("Fiat");
$f->setSigla("F");
array_push($fabricanteArray, $f);

$rn = new Fabricante ();
$rn->setNome("Renault");
$rn->setSigla("RN");
array_push($fabricanteArray, $rn);

$escolha = 0;

do {
    print "\n * -------- MENU ------------* \n";
    print " 1 -------- CADASTRAR ------- \n";
    print " 2 -------- REMOVER ----------\n";
    print " 3 -------- LISTAR ----------\n";
    print " 0 -------- SAIR ------------ \n";

    $escolha = readline("De qual serviço você precisa? ");

    switch ($escolha) {
        case 1:
            print "--- CADASTRO ---\n\n";

            $carro = new Carro();
            $carro->setModelo(readline("Informe o nome do carro: "));
            $carro->setAnoFabricacao(readline("Informe o ano de fabricação do carro: "));
        
            $fabricante = null;
            while($fabricante == null) {
        
            print "--- Escolha um fabricante ---\n\n";
            foreach ($fabricanteArray as $f) {
                print $f . "\n";
            }
                $sigla = readline("Informe a sigla do fabricante: ");
                 $fabricante = retornaFabricante($fabricanteArray, $sigla);
            }
        
            $carro->setFabricante($fabricante);
            array_push($carroArray, $carro);
            break;

        case 2:

            print "--- LISTA CARROS ---\n\n";
            foreach ($carroArray as $i => $c) {
                print ($i + 1) .  "º Carro\n" . $c;
            }

            $indiceRemover = readline("Quem você gostaria de remover? (INFORME O NÚMERO): ");
            $indiceRemover--;

            if ($indiceRemover >= 0 && $indiceRemover < count($carroArray)) {
                array_splice($carroArray, $indiceRemover, 1);
            }
            else {
                print "REMOÇÃO INVÁLIDA! \n";
            }

            break;

        case 3:

            print "--- LISTA CARROS ---\n\n";
            foreach ($carroArray as $i => $c) {
                print ($i + 1) . "º Carro\n" . $c;
            }
            break;
        case 0:
            print "ENCERRANDO PROGRAMA\n";
            die();
        
        default:
            print "Opção inválida!";
            break;
    }
} while ($escolha != 0);

