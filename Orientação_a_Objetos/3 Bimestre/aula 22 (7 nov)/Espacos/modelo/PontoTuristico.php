<?php

require_once("Espaco.php");

class PontoTuristico extends Espaco {
    
    private int $duracaoDaVisita;


    public function getDadosPontoTuristico (){
        $valores = "Nome: " . $this->nome . " | Endereço: " . $this->endereco . " | Duração da visita: " . $this->duracaoDaVisita . "\n";

        return $valores;
    }
    public function getDuracaoDaVisita(): int
    {
        return $this->duracaoDaVisita;
    }

    public function setDuracaoDaVisita(int $duracaoDaVisita): self
    {
        $this->duracaoDaVisita = $duracaoDaVisita;

        return $this;
    }
}

