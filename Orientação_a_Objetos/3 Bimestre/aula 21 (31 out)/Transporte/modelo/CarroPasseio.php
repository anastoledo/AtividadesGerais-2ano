<?php

require_once("Veiculo.php");

class CarroPasseio extends Veiculo {

    private $qtdPassageiros;


    public function getDados() {

        $valores = " Modelo: " .  $this->modelo . " | Velocidade Max: " . $this->velocidadeMax . " | Cor: " . $this->cor . "| Quantidade passageiros: " . $this->qtdPassageiros . "\n";

        return $valores;
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