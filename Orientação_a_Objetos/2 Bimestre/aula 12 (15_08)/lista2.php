<?php

class Cidade {
    //atributos
    private $nome;
    private $populacao;
    private $tamanho;
    private $PIB;
    private $IDH;

    //GETs e SETs
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getPopulacao() {
        return $this->populacao;
    }

    public function setPopulacao($populacao): self {
        $this->populacao = $populacao;

        return $this;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setTamanho($tamanho): self {
        $this->tamanho = $tamanho;

        return $this;
    }

    public function getPIB() {
        return $this->PIB;
    }

    public function setPIB($PIB): self {
        $this->PIB = $PIB;

        return $this;
    }

    public function getIDH() {
        return $this->IDH;
    }

    public function setIDH($IDH): self {
        $this->IDH = $IDH;

        return $this;
    }
    //metodos

    public function aumentarPopulacao () {
        print "ATENÇÃOOO, OUVE UM NASCIMENTO NA CIDADE!!\n ";
        $this->populacao = $this->populacao + 1;
    }

    public function mudarNome ($novoNome) {
        $this->setNome($novoNome);
        return print "O nome da cidade é " . $novoNome . "\n";
    }

    public function area ($novoTamanho) {
        $this->setTamanho($novoTamanho);
        return print "A área atual é de " . $novoTamanho . "\n";
    }

    public function __toString() {
        $dados = "A cidade " . $this->nome . " de população " . $this->populacao . " e área " . $this->tamanho . " com PIB e IDH, respectivamente de " . $this->PIB . " - " . $this->IDH;
        return $dados;
    }
}
//programa principal

$cidade = new Cidade ();
$cidade->setNome(readline("Informe o nome da cidade: "));
$cidade->setPopulacao(readline("Informe a população atual da cidade: "));
$cidade->setTamanho(readline("Informe a área da cidade: "));
$cidade->setIDH(readline("Informe o IDH da cidade: "));
$cidade->setPIB(readline("Informe o PIB  da cidade: "));

$cidade->aumentarPopulacao();

$escolha = readline("Você deseja mudar o nome da sua cidade? (1 para SIM ou 0 para NÃO) ");
if ($escolha == 1) {
    $novoNome = readline("Informe o novo nome da cidade: ");
    $cidade->mudarNome($novoNome);
}
else {
    print "O nome continua " . $cidade->getNome();
}

$escolha = readline("Você deseja mudar a área da sua cidade? (1 para SIM ou 0 para NÃO) ");
if ($escolha == 1) {
    $novoTamanho = readline("Informe a nova área da cidade: ");
    $cidade->area($novoTamanho);
}
else {
    print "A área continua " . $cidade->getTamanho();
}

print $cidade;