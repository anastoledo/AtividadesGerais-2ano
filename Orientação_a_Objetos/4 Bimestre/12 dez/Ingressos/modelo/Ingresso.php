<?php

class Ingresso {

    protected float $valor;

    public function getValorTotal (): float {

        return $this->valor;

    }

    public function getValor(): float
    {
        return $this->valor;
    }

    
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}