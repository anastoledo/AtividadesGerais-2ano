<?php 

require_once("Calculadora.php");

class Subtracao extends Calculadora{

    public function Calcular()
    {
        return $this->getNumA() - $this->getNumB();
    }
}