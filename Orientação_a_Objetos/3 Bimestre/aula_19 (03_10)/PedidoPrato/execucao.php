<?php
 
require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$pedidoArray = array();

$pratoArray = array (
    new Prato(1, "Camarão a Milanesa" , 110.00),
    new Prato(2, "Pizza Margherita" , 80.00),
    new Prato(3, "Macarrão a Carbonara" , 60.00),
    new Prato(4, "Bife a Parmegiana" , 75.00),
    new Prato(5, "Risoto ao Funghi" , 70.00),
);

function retornaPrato ($pratoArray, $numero) {
    foreach($pratoArray as $pra) {
        if($numero == $pra->getNumero()) {
            return $pra;
        }
    }
    return null;
}

$escolha = 0;

do {
    print "\n * -------- MENU ------------* \n";
    print " 1 -------- CADASTRAR ---------* \n";
    print " 2 -------- CANCELAR ----------*\n";
    print " 3 -------- LISTAR ------------*\n";
    print " 4 -------- TOTAL -------------*\n";
    print " 0 -------- SAIR --------------* \n";

    $escolha = readline("De qual serviço você precisa? ");

switch ($escolha) {

    case 1:
        print "\n\n--- CADASTRO ---\n\n";

        $pedido = new Pedido();
        $pedido->setNomeCliente(readline("Informe o nome do cliente: "));
        $pedido->setNomeGarcom(readline("Informe o nome do garçom: "));

        $prato = null;
        while ($prato == null) {
            print "\n\nLISTA DE PRATOS\n\n";
            foreach ($pratoArray as $pra) {
                print $pra;
            }
        
            $numero = readline("Informe o número do prato: ");
            $prato = retornaPrato($pratoArray, $numero);
        }

        $pedido->setPrato($prato);
        array_push($pedidoArray, $pedido);

        break;

    case 2:
        print "LISTA PEDIDOS\n\n";
        foreach ($pedidoArray as $i => $ped) {
            print ($i + 1) . "º Pedido\n" . $ped;
        }

        $indiceRemover = readline("Quem você gostaria de remover? (INFORME O NÚMERO): ");
        $indiceRemover--;

        if ($indiceRemover >= 0 && $indiceRemover < count($pedidoArray)) {
            array_splice($pedidoArray, $indiceRemover, 1);
        }
        else {
            print "REMOÇÃO INVÁLIDA! \n";
        }

        break;
    
    case 3:
        foreach ($pedidoArray as $i => $ped) {
            print "\n\nO cliente " . $ped->getNomeCliente() . ", foi atendido pelo garçom " . $ped->getNomeGarcom() . ", pediu um prato de " . $ped->getPrato()->getNome() . " no valor de R$ " . $ped->getPrato()->getValor() . "\n\n";
        }
        break;

    case 4: 
        $total = 0;
        foreach ($pedidoArray as $ped) {
            $total = $total + $ped->getPrato()->getValor();
        }
        print "\n\nO valor total dos pedidos foram de: R$ " . $total . "\n";
        break;

    
    case 0: 
        print "\nENCERRANDO APLICAÇÃO...";
        break;

    default:
        print "\nOPÇÃO INVÁLIDA";
        break;
}

} while ($escolha != 0);

