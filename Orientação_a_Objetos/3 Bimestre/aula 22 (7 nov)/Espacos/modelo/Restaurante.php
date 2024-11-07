<?php

require_once("Espaco.php");

class Restaurante extends Espaco {

    private string $tipoComida;
    
    public function getDadosRestaurante (){
        $valores = "Nome: " . $this->nome . " | Endereço: " . $this->endereco . " | Comida: " . $this->tipoComida. "\n";

        return $valores;
    }

    public function getTipoComida(): string
    {
        return $this->tipoComida;
    }


    public function setTipoComida(string $tipoComida): self
    {
        $this->tipoComida = $tipoComida;

        return $this;
    }
}