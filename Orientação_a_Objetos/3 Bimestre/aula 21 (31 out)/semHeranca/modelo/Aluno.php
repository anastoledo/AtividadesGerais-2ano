<?php

class Aluno {

    private $nome;
    private $rg;
    private $idade;
    private $matricula;
    
    public function getNome(){
        return $this->nome;
    }

   
    public function setNome($nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getRg() {
        return $this->rg;
    }

    public function setRg($rg): self
    {
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

   
    public function getMatricula()
    {
        return $this->matricula;
    }

    
    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }
}