<?php

class Prato {
    //atributos
    private $descricao;
    private $quantidade;
    private $valorUnitario;

    //GETs e SETs
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao): self {
        $this->descricao = $descricao;

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

    public function setValorUnitario($valorUnitario): self{
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    //metodos
    public function getValorTotal () {
        return $this->quantidade * $this->valorUnitario;

    }

    public function __toString() {
        return "Os pratos consumidos foram: " . $this->descricao . " | " . $this->quantidade . " | " . $this->valorUnitario . "\n";
    }
}

//programa principal 

$pratos = array();

for ($i=0 ; $i < 3  ; $i++ ) { 
    $prato = new Prato();
    $prato->setDescricao(readline("Informe a descrição do prato " . ($i + 1) . ": "));
    $prato->setQuantidade(readline("Informe a quantidade do prato " . ($i + 1) . ": "));
    $prato->setValorUnitario(readline("Informe o valor do prato " . ($i + 1). ": "));
    array_push($pratos, $prato);
}



//imprimir 
$valorTotal = 0;
foreach ($pratos as $p) {
    print $p;
    $valorTotal =  $valorTotal + $p->getValorTotal();
}
print "O valor total do jantar foi de " . $valorTotal;
