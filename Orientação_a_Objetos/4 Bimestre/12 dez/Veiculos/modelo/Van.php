<?php 

require_once("Veiculo.php");

class Van extends Veiculo{

    public function ValorViagem()
    {
        return $this->getValorAluguel() + (2.10 * $this->getQuilometros());
    }

    public function getTipo()
    {
        return "van";
    }
}