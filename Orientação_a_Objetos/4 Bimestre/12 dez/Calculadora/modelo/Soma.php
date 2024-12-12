<?php 

require_once("Calculadora.php");

class Soma extends Calculadora {

    public function Calcular()
    {
       return $this->getNumA() + $this->getNumB();
    }
}

