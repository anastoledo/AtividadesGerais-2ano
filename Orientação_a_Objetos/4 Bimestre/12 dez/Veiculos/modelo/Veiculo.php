<?php 

abstract class Veiculo {

  
    private $valorAluguel;
    private $quilometros;

    public function __toString()
    {
        return "O veículo " . $this->getTipo() .  ", foi alugado por R$" . $this->valorAluguel . ", rodou " . $this->quilometros . " com custo total de R$ " . number_format($this->ValorViagem(), 2, ',', '.') . "\n\n";
    }


    abstract public function ValorViagem ();

    abstract public function getTipo();

    public function getValorAluguel()
    {
        return $this->valorAluguel;
    }


    public function setValorAluguel($valorAluguel): self
    {
        $this->valorAluguel = $valorAluguel;

        return $this;
    }


    public function getQuilometros()
    {
        return $this->quilometros;
    }

    public function setQuilometros($quilometros): self
    {
        $this->quilometros = $quilometros;

        return $this;
    }
}

