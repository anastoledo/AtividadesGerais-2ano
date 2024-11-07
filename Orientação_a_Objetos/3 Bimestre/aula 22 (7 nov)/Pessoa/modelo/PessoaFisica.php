<?php

require_once("Pessoa.php");

class PessoaFisica extends Pessoa {

    private int $idade;
    private string $cpf;

    public function __toString()
    {
        $escrita = $this->nome . " - Idade: " . $this->idade . 
                " - CPF: " . $this->cpf . ".\n";

        return $escrita;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}