<?php

require_once("Base.php");
require_once("IDados.php");

class Equipe extends Base implements IDados{
    //Atributos
    private string $chefeEquipe;

    //Métodos
    public function __construct($a = " ", $b= 0, $c = " ", $d = " ", )
    {
        $this->nome =  $a;
        $this->anoEntrada = $b;
        $this->chefeEquipe = $c;
        $this->nacionalidade = $d;
        
    }
    public function getDados()
    {
        return "Nome da equipe: " . $this->nome.  " | Ano entrada: " . $this->anoEntrada . "| Chefe da equipe: " . $this->chefeEquipe . " | Nacionalidade da equipe: " . $this->nacionalidade . "\n\n";

    }

    public function getChefeEquipe(): string
    {
        return $this->chefeEquipe;
    }

    public function setChefeEquipe(string $chefeEquipe): self
    {
        $this->chefeEquipe = $chefeEquipe;
        return $this;
    }

}
