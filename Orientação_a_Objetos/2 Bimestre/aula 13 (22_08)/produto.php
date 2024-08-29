<?php

class Produto {

    //atributos
    private $descricao;
    private $unidadeMedida;
    private int $quantidade;
    private float $valorUnitario;

    //metodos

    public function getValorTotal () {
     return $this->quantidade * $this->valorUnitario;

    }

    public function __toString() {
        $valorTotal = $this->descricao . " (" . $this->unidadeMedida . ") " . " | " . $this->quantidade . " X " . $this->valorUnitario . " = " . $this->getValorTotal() . "\n";
        return $valorTotal;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao): self {
        $this->descricao = $descricao;

        return $this;
    }

  
    public function getUnidadeMedida() {
        return $this->unidadeMedida;
    }


    public function setUnidadeMedida($unidadeMedida): self {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValorUnitario() {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario): self {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

print "----PRODUTO 1 ----\n";
$produto1 = new Produto();
$produto1->setDescricao(readline("Informe a descrição: "));
$produto1->setUnidadeMedida(readline("Informe a unidade de medida: "));
$produto1->setQuantidade(readline("Informe a quantidade: "));
$produto1->setValorUnitario(readline("Informe o valor valor unitario: "));
print "Produto 1: " . $produto1;

print "----PRODUTO 2 ----\n";
$produto2 = new Produto();
$produto2->setDescricao(readline("Informe a descrição: "));
$produto2->setUnidadeMedida(readline("Informe a unidade de medida: "));
$produto2->setQuantidade(readline("Informe a quantidade: "));
$produto2->setValorUnitario(readline("Informe o valor valor unitario: "));
print "Produto 2: " . $produto2;

print "----PRODUTO 3 ----\n";
$produto3 = new Produto();
$produto3->setDescricao(readline("Informe a descrição: "));
$produto3->setUnidadeMedida(readline("Informe a unidade de medida: "));
$produto3->setQuantidade(readline("Informe a quantidade: "));
$produto3->setValorUnitario(readline("Informe o valor valor unitario: "));
print "Produto 3: " . $produto3;

$maiorValorTotal = $produto1;

if ($produto2->getValorTotal() > $maiorValorTotal->getValorTotal()){
    $maiorValorTotal = $produto2;
}

if ($produto3->getValorTotal() > $maiorValorTotal->getValorTotal()) {
    $maiorValorTotal = $produto3;
}

print "Venda com o maior valor total do produto: " . $maiorValorTotal->getDescricao() . " (" . $maiorValorTotal->getUnidadeMedida() . ") \n";
