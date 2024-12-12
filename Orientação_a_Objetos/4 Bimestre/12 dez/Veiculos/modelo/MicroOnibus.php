<?php 

require_once("Veiculo.php");

class MicroOnibus extends Veiculo{

    public function ValorViagem()
    {
        return $this->getValorAluguel() + (2.75 * $this->getQuilometros());
    }

    public function getTipo()
    {
        return "micro-ônibus";
    }
}