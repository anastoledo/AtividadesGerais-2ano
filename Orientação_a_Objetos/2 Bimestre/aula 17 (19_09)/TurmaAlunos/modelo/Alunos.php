<?php

class Alunos {
    private string $nome;
    private int $idade;
    private Turma $turma;

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

    public function getTurma(): Turma {
        return $this->turma;
    }

    public function setTurma(Turma $turma): self {
        $this->turma = $turma;

        return $this;
    }

    
}