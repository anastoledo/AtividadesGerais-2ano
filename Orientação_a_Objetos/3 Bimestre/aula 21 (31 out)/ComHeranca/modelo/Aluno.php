<?php

require_once("Pessoa.php");

class Aluno extends Pessoa{

    private $matricula;

   
    public function __toString() {

        $dados =" Nome: " . $this->nome;
        $dados .=" | RG: " . $this->rg;
        $dados .=" | Idade: " . $this->rg;
        $dados .=" | Matricula: " . $this->matricula . "\n";

        return $dados;

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