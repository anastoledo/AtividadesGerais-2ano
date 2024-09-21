<?php

class Funcionario {
    private string $nome;
    private string $cargo;
    private float $salario;
    private Departamento $departamento;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getCargo(): string {
        return $this->cargo;
    }

    public function setCargo(string $cargo): self {
        $this->cargo = $cargo;

        return $this;
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario(float $salario): self {
        $this->salario = $salario;

        return $this;
    }

    public function getDepartamento(): Departamento {
        return $this->departamento;
    }

    public function setDepartamento(Departamento $departamento): self {
        $this->departamento = $departamento;

        return $this;
    }

    public function __toString() {
        $imprimir = "Nome : " . $this->nome . " | Cargo: " . $this->cargo . " | Salario: " . $this->salario . "\n Nome departamento: " . $this->getDepartamento()->getNome() . " | Número da sala: " . $this->getDepartamento()->getNumSala() . " \n";

        return $imprimir;
    }
}