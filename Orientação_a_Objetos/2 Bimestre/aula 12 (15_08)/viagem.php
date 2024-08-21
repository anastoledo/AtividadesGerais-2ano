<?php

class Veiculo {
    private $capacidade;
    private $passagensVendidas;

    public function __construct($capacidade,) {
        $this->capacidade = $capacidade;
        $this->passagensVendidas = 0;
    }

    public function venderPassagem($quantidadePassagens) : bool{
        if ($this->passagensVendidas + $quantidadePassagens <= $this->capacidade) {
            $this->passagensVendidas = $this->passagensVendidas + $quantidadePassagens;
            return true;
        } 
        else {
            return false;
        }
    }

    public function getPassagensVendidas() {
        return $this->passagensVendidas;
    }

    public function getCapacidade() {
        return $this->capacidade;
    }

}

// Programa principal

$capacidade = readline("Informe a capacidade do veículo: ");
$veiculo = new Veiculo($capacidade);
$quantidadePassagens = readline("Informe a quantidade de passagens: (DIGITE 0 PARA SAIR) ");

    if ($quantidadePassagens == 0) {
        print "Encerrando operações..\n";
        die;
    }
    elseif ($veiculo->venderPassagem($quantidadePassagens)) {
       print "Parabénss, a sua passagem foi comprada com SUCESSO! O total de passageiros no veiculo é de " . $veiculo->getPassagensVendidas().  "\n";
    }
    else {
        print "Não fui possivel efetuar a venda da passagem, pois atingimos 100% da capacidade do veículo\n";
       print "No momento o número de passageiros no veículo é de " . $veiculo->getPassagensVendidas() . " e a nossa capacidade no momento é de " . $veiculo->getCapacidade(). "\n";
    }
