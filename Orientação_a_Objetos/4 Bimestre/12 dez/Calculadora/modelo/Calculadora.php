<?php 

abstract class Calculadora {

    private int $numA;
    private int $numB;

    abstract public function Calcular();

    public function getNumA(): int
    {
        return $this->numA;
    }

    public function setNumA(int $numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    public function getNumB(): int
    {
        return $this->numB;
    }

    public function setNumB(int $numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}