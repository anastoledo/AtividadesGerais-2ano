<?php

require_once("Pessoa.php");

class Professor extends Pessoa{

    private $salario;

    public function __toString() {

        $dados =" Nome: " . $this->getNome();
        $dados .=" | RG: " . $this->getRg();
        $dados .=" | Idade: " . $this->getIdade();
        $dados .=" | Salario: " . $this->getSalario() . "\n";

        return $dados;

    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}