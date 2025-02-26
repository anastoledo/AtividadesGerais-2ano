<?php

require_once("IDados.php");
require_once("Base.php");

class Corrida extends Base implements IDados {

    private int $voltas;

    public function getDados()
    {
        $d = "Dados Pista: \n";
        $d .= "Nome: " . $this->getNome() . " | Numero de voltas: " . $this->voltas . " | Ano de entrada: " . $this->getAnoEntrada() . " | País: " . $this->getNacionalidade() . "\n";
        return $d;
    }
    public function __construct($a = "", $b = 0, $c = 0, $d = "")
    {
        $this->nome = $a;
        $this->voltas = $b;
        $this->anoEntrada = $c;
        $this->nacionalidade = $d;
    }

    /**
     * Get the value of voltas
     */
    public function getVoltas(): int
    {
        return $this->voltas;
    }

    /**
     * Set the value of voltas
     */
    public function setVoltas(int $voltas): self
    {
        $this->voltas = $voltas;

        return $this;
    }

}
