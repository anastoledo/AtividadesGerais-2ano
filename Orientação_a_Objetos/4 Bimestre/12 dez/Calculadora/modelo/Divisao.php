<?php 

require_once("Calculadora.php");

class Divisao extends Calculadora{

    public function Calcular() {

        return $this->getNumA()/$this->getNumB();
        
    }
}