<?php

require_once("Veiculo.php");

class Onibus extends Veiculo {
    
    private $qtdPassageiros;
    private $pesoMax;

    public function getDados() {

        $valores = " Modelo: " .  $this->modelo . " | Velocidade Max: " . $this->velocidadeMax . " | Cor: " . $this->cor . "| Quantidade passageiros: " . $this->qtdPassageiros . "| Peso max: " . $this->pesoMax . "\n";

        return $valores;
    }


    public function getPesoMax()
    {
        return $this->pesoMax;
    }

   
    public function setPesoMax($pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }

   
    public function getQtdPassageiros()
    {
        return $this->qtdPassageiros;
    }

  
    public function setQtdPassageiros($qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }

}