<?php

require_once("Calculadora.php");

class Resto extends Calculadora{

    public function Calcular()
    {
        return $this->getNumA()%$this->getNumB();
    }
}