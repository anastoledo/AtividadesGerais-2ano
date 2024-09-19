<?php 

class Cidade {
    private string $nome;
    private int $qtdHabitantes;
    private int $altitude;
    private Estado $estado;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getQtdHabitantes(): int {
        return $this->qtdHabitantes;
    }

    public function setQtdHabitantes(int $qtdHabitantes): self {
        $this->qtdHabitantes = $qtdHabitantes;

        return $this;
    }

    public function getAltitude() {
        return $this->altitude;
    }

    public function setAltitude($altitude): self {
        $this->altitude = $altitude;

        return $this;
    }
    
    public function getEstado(): Estado {
        return $this->estado;
    }

    public function setEstado(Estado $estado): self {
        $this->estado = $estado;

        return $this;
    }

    public function __toString() {
        $imprimir = "A cidade de " . $this->nome . ", localizada no estado " . $this->getEstado()->getNome() . " - " . $this->getEstado()->getSigla() . ", possui " . $this->qtdHabitantes . " habitantes e uma altitude de " . $this-> altitude . " metros \n";
        return $imprimir;
    }
}
