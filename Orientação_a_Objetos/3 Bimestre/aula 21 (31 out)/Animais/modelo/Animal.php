<?php

class Animal {

    protected $nome;
    protected $raca;

    public function getDados() {

        $valores = " Nome: " .  $this->nome . " | Raça: " . $this->raca . "\n";

        return $valores;
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

    public function getRaca()
    {
        return $this->raca;
    }

    public function setRaca($raca): self
    {
        $this->raca = $raca;

        return $this;
    }
}

