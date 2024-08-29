<?php 

class Robo {
    private string $nome;
    private string $tipo;
    private int $quantidadeSensores;

    public function __toString() {
        return print "Nome: " . $this->getNome() . " | Tipo: " . $this->getTipo() . " | Quantidade sensores: " . $this->getQuantidadeSensores() . "\n";
    }

    //GETs e SETs
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getQuantidadeSensores(): int
    {
        return $this->quantidadeSensores;
    }

    public function setQuantidadeSensores(int $quantidadeSensores): self
    {
        $this->quantidadeSensores = $quantidadeSensores;

        return $this;
    }
}

//programa principal

$robos = array();

for ($i=0; $i < 4 ; $i++) { 
    $robo = new Robo();
    $robo->setNome(readline("Informe o nome do robo " . $i + 1 . ": "));
    $robo->setTipo(readline("Informe o tipo do robo" . $i + 1 . ": "));
    $robo->setQuantidadeSensores(readline("Informe a quantidade de sensores" . $i + 1 . ": "));

    array_push($robos, $robo);
}
// print $robos[2]->getNome; da prá fazer assim também
foreach ($robos as $robo) {
    print $robo;
}