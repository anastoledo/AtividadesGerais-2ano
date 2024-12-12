<?php

require_once("Ingresso.php");

class IngressoVip extends Ingresso {

    private float $valorAdicional;

    public function __construct(float $valor = 0.0, float $valorAdicional = 0.0) {

        parent::__construct($valor); 
        $this->valorAdicional = $valorAdicional;
    }
    
    public function getValorTotal(): float
    {

        return $this->valor + $this->valorAdicional;
    }
    
    public function getValorAdicional(): float
    {
        return $this->valorAdicional;
    }

   
    public function setValorAdicional(float $valorAdicional): self
    {
        $this->valorAdicional = $valorAdicional;

        return $this;
    }
}