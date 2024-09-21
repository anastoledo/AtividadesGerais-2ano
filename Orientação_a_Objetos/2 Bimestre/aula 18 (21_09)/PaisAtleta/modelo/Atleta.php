<?php

class Atleta {
    private string $nome;
    private int $idade;
    private $esporte;
    private Pais $pais;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): self {
        $this->idade = $idade;

        return $this;
    }

    public function getEsporte() {
        return $this->esporte;
    }

    public function setEsporte($esporte): self {
        $this->esporte = $esporte;

        return $this;
    }


    public function getPais(): Pais {
        return $this->pais;
    }


    public function setPais(Pais $pais): self {
        $this->pais = $pais;

        return $this;
    }

    public function __toString() {
        $imprimir = $this->nome . " é atleta do " . $this->getPais()->getNome() . ", continente " . $this->getPais()->getContinente() . ", possui " . $this->idade . " anos e atua no esporte " . $this->esporte . "\n\n";

        return $imprimir;
    }
}