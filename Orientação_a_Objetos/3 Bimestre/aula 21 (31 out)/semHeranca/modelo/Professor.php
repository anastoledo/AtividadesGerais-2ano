<?php

class Professor {

    private $nome;
    private $rg;
    private $idade;
    private $salario;

    public function getNome() {
        return $this->nome;
    }

    
    public function setNome($nome): self {
        $this->nome = $nome;

        return $this;
    }

  
    public function getRg() {
        return $this->rg;
    }


    public function setRg($rg): self {
        $this->rg = $rg;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

  
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
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