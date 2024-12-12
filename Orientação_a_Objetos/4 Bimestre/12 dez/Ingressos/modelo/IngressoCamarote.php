<?php

class IngressoCamarote extends IngressoVip{

    private float $valorAdicionalCamarote;

    public function __construct(float $valor = 0.0, float $valorAdicional = 0.0, float $valorAdicionalCamarote = 0.0) {

        parent::__construct($valor, $valorAdicional); 
        $this->valorAdicionalCamarote = $valorAdicionalCamarote;
    }

    public function getValorTotal(): float
    {
        return parent::getValorTotal() + $this->valorAdicionalCamarote;
    }

    public function getValorAdicionalCamarote(): float
    {
        return $this->valorAdicionalCamarote;
    }

   
    public function setValorAdicionalCamarote(float $valorAdicionalCamarote): self
    {
        $this->valorAdicionalCamarote = $valorAdicionalCamarote;

        return $this;
    }
}

