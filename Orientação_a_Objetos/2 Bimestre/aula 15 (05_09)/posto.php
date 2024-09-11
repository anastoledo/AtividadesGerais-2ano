<?php 

class Posto {
    private int $litrosGasolina;
    private $abastecimentosGasolina;
    

    public function getAbastecimentosGasolina()
    {
        return $this->abastecimentosGasolina;
    }

    public function __construct() {
        $this->litrosGasolina = 0;
        $this->abastecimentosGasolina = array();
    }

    public function abastecer ($litros) {
        if ($litros > $this->litrosGasolina) {
            return false;

        } else {
            $this->litrosGasolina =  $this->litrosGasolina - $litros;
            array_push($this->abastecimentosGasolina, $litros);  
            return true;     
        }
    }

    public function reporEstoque ($litros) {
        $this->litrosGasolina = $this->litrosGasolina + $litros;
    }

}

//programa principal

$postos = new Posto(); // Criar uma única vez
$escolha = 0;

do {
    print "\n * -------- MENU ------------* \n";
    print " 1 -------- ABASTECER ------- \n";
    print " 2 -------- REPOR ESTOQUE ----------\n";
    print " 3 -------- LISTAR ABASTECIMENTOS ----------\n";
    print " 0 -------- SAIR ------------ \n";

    $escolha = (int)readline("De qual serviço você precisa? ");

    switch ($escolha) {

        case 0: 
            print "SAINDO DO PROGRAMA...\n";
            break;

        case 1:
            $litros = (int)readline("Informe quantos litros deseja abastecer: ");
            $postos->abastecer($litros);

            if ($postos->abastecer($litros) == false) {
                 print "Não temos gasolina no nosso estoque, reponha primeiro!\n";
            }
            else {
                print "O abastecimento foi feito com sucesso!\n";
            }
            break;

        case 2:
            $litros = (int)readline("Informe quantos litros deseja repor no estoque: ");
            $postos->reporEstoque($litros);
            break;

        case 3: 
            foreach ($postos->getAbastecimentosGasolina() as $i => $a) {
                print ($i + 1) . " | " . $a . " litros\n";
            }
            break;
        
        default:
            print "OPÇÃO INVÁLIDA\n";
            break;
    }

} while ($escolha != 0);
