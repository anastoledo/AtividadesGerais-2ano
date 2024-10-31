<?php

require_once("Veiculo.php");

class Caminhao extends Veiculo {

    private $qtdCarga;
    private $altura;


    public function getDados() {

        $valores = " Modelo: " .  $this->modelo . " | Velocidade Max: " . $this->velocidadeMax . " | Cor: " . $this->cor . "| Quantidade carga: " . $this->qtdCarga . "| Altura: " . $this->altura . "\n";

        return $valores;
    }
    
    public function getQtdCarga()
    {
        return $this->qtdCarga;
    }

  
    public function setQtdCarga($qtdCarga): self
    {
        $this->qtdCarga = $qtdCarga;

        return $this;
    }

  
    public function getAltura()
    {
        return $this->altura;
    }

   
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}