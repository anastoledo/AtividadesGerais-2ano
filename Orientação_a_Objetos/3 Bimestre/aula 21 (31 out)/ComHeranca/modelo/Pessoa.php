<?php

class Pessoa{

    protected $nome;
    protected $rg;
    protected $idade;

    public function getNomeIdade() {
        
        return $this->nome . " - " . $this->idade;
    }

    
    public function getNome()
    {
        return $this->nome;
    }

   
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    
    public function getRg()
    {
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
}