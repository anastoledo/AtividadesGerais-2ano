<?php 

require_once("Veiculo.php");

class Carro extends Veiculo{

    public function ValorViagem()
    {
        return $this->getValorAluguel() + (1.50 * $this->getQuilometros());
    }

    public function getTipo()
    {
        return "carro";
    }
}