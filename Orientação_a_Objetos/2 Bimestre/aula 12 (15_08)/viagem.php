<?php

class Veiculo {
    private $capacidade;
    private $passageiros;

    public function venderPassagem($quantidadePassagens) {
        if ($this->passageiros + $quantidadePassagens <= $this->capacidade) {
            $this->passageiros = $this->passageiros + $quantidadePassagens;
            return true;
        } else {
            return false;
        }
    }

    public function getPassageiros() {
        return $this->passageiros;
    }

    public function getCapacidade() {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): self {
        $this->capacidade = $capacidade;

        return $this;
    }
    
    public function setPassageiros($passageiros): self
    {
        $this->passageiros = $passageiros;

        return $this;
    }
}

// Programa principal

$veiculo = new Veiculo();
$veiculo->setCapacidade(readline("Informe a capacidade do veiculo: "));

while (true) {
    $quantidadePassagens = readline("Informe a quantidade de passagens: (DIGITE 0 PARA SAIR ");

    if ($quantidadePassagens == 0) {
        print "Encerrando operações..\n";
        break;
    }
    if ($veiculo->venderPassagem($quantidadePassagens)) {
        "Parabénss, a sua passagem foi comprada com SUCESSO! O total de passageiros no veiculo é de " . $veiculo->getPassageiros().  "\n";
    }
    else {
        "Não fui possivel efetuar a venda da passagem, pois atingimos 100% da capacidade do veículo\n";
        "No momento o número de passageiros no veículo é de " . $veiculo->getPassageiros() . "mas a nossa capacidade no momento é de " . $veiculo->getCapacidade(). "\n";
    }
}