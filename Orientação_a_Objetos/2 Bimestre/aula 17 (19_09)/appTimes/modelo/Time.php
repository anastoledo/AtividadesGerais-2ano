<?php

class Time {
    private string $nome;
    private string $cidade;

    private array $jogadoras;
    
    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getCidade(): string {
        return $this->cidade;
    }

    public function setCidade(string $cidade): self {
        $this->cidade = $cidade;

        return $this;
    }

    public function getJogadoras(): array {
        return $this->jogadoras;
    }

    public function setJogadoras(array $jogadoras): self {
        $this->jogadoras = $jogadoras;

        return $this;
    }
}