<?php 

require_once("Calculadora.php");

class Multiplicacao extends Calculadora{

    public function Calcular()
    {
        return $this->getNumA() * $this->getNumB();

    }
}