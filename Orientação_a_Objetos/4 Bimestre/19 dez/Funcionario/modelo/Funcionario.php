<?php

abstract class Funcionario {

    private $nome;

    public function __toString()
    {
        return "O funcionário " . $this->nome . ", cargo " . $this->getCargo() . ", possui salário e R$ " . number_format($this->getSalario(), 2, ',', '.') . "\n\n";
    } 

    abstract public function getSalario();

    abstract public function getCargo();
    

    public function getNome()
    {
        return $this->nome;
    }

  
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}