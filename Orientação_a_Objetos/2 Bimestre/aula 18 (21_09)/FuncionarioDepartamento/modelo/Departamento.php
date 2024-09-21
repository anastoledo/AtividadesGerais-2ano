<?php

class Departamento {
    private string $nome;
    private int $numSala;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getNumSala(): int {
        return $this->numSala;
    }

    public function setNumSala(int $numSala): self {
        $this->numSala = $numSala;

        return $this;
    }
}