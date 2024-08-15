<?php

class Carro {
    //atributos
    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMax;

    //metodos
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo): self {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca): self {
        $this->marca = $marca;

        return $this;
    }

   
    public function getAnoFabricacao() {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao($anoFabricacao): self {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    public function getVelocidadeMax() {
        return $this->velocidadeMax;
    }

    public function setVelocidadeMax($velocidadeMax): self {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }
}

// programa principal

print "----CARRO 1----";
$carro1 = new Carro();
$carro1->setModelo(readline("Informe o modelo do carro: "));
$carro1->setMarca(readline("Informe a marca do carro: "));
$carro1->setAnoFabricacao(readline("Informe o ano de fabricação do carro: "));
$carro1->setVelocidadeMax(readline("Informe a velocidade máxima do carro: "));

print "----CARRO 2----";
$carro2 = new Carro();
$carro2->setModelo(readline("Informe o modelo do carro: "));
$carro2->setMarca(readline("Informe a marca do carro: "));
$carro2->setAnoFabricacao(readline("Informe o ano de fabricação do carro: "));
$carro2->setVelocidadeMax(readline("Informe a velocidade máxima do carro: "));

print "----CARRO 3----";
$carro3 = new Carro();
$carro3->setModelo(readline("Informe o modelo do carro: "));
$carro3->setMarca(readline("Informe a marca do carro: "));
$carro3->setAnoFabricacao(readline("Informe o ano de fabricação do carro: "));
$carro3->setVelocidadeMax(readline("Informe a velocidade máxima do carro: "));

$carroMaisLento = $carro1;
$carroMaisRapido = $carro1;

if ($carro2->getVelocidadeMax() < $carroMaisLento->getVelocidadeMax()) {
    $carroMaisLento = $carro2;
}
if ($carro3->getVelocidadeMax() < $carroMaisLento->getVelocidadeMax()) {
    $carroMaisLento = $carro3;
}

if ($carro2->getVelocidadeMax() > $carroMaisRapido->getVelocidadeMax()) {
    $carroMaisRapido = $carro2;
}
if ($carro3->getVelocidadeMax() > $carroMaisRapido->getVelocidadeMax()) {
    $carroMaisRapido = $carro3;
}

print "O carro mais rápido é: " . $carroMaisRapido->getModelo() . " - " . $carroMaisRapido->getMarca() . ", fabricado em " . $carroMaisRapido->getAnoFabricacao() . ", com velocidade máxima de " . $carroMaisRapido->getVelocidadeMax() . " km/h.\n";

print "O carro mais lento é: " . $carroMaisLento->getModelo() . " - " . $carroMaisLento->getMarca() . ", fabricado em " . $carroMaisLento->getAnoFabricacao() . ", com velocidade máxima de " . $carroMaisLento->getVelocidadeMax() . " km/h.\n";