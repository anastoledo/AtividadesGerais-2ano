<?php

class IngressoCamarote extends IngressoVip{

    private float $valorAdicionalCamarote;


    public function getValorTotal(): float {
        
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
