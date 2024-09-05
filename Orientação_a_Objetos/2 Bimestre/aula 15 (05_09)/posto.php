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

    public function __toString($litros) {
        return "Abastecimento - " . $litros . " litros";
    }

    public function abastecer ($litros) {
        if ($litros > $this->litrosGasolina) {
            print "Não temos gasolina no nosso estoque, reponha primeiro!";
            return false;
        }
        else {
            print "O abastecimento foi feito com sucesso!!";
            $this->litrosGasolina - $litros;
            array_push($this->abastecimentosGasolina, $litros);  
            return true;     
        }
    }

    public function reporEstoque ($litros) {
        $this->litrosGasolina =  $this->litrosGasolina + $litros;
    }

}

//programa principal

$escolha = 0;

do {
    print "\n * -------- MENU ------------* \n";
    print " 1 -------- ABASTECER ------- \n";
    print " 2 -------- REPOR ESTOQUE ----------\n";
    print " 3 -------- LISTAR ABASTECIMENTOS ----------\n";
    print " 0 -------- SAIR ------------ \n";

    $escolha = readline("De qual serviço você precisa? ");
    $postos = new Posto();

    switch ($escolha) {

        case 0: 
            print "SAINDO DO PROGRAMA...";

        case 1:
            $litros = readline("Informe quantos litros deseja abastecer: ");
            $postos->abastecer($litros);

            break;

        case 2:
            $litros = readline("Informe quantos litros deseja abastecer: ");
            $postos->reporEstoque($litros);
                
            break;

        case 3: 
            foreach ($postos->getAbastecimentosGasolina() as $i => $a) {
               print ($i + 1) . " | " . $a;
            }
        
        default:
            print "OPÇÃO INVÁLIDA";
            break;
    }

} while ($escolha != 0);