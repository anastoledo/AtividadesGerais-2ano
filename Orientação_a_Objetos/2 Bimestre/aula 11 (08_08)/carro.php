<?php

class Carro {
    private $modelo;
    private $marca;
    private $ano;
    private $velocidade;

   
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo): self {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca): self {
        $this->marca = $marca;

        return $this;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano): self {
        $this->ano = $ano;

        return $this;
    }

    public function getVelocidade() {
        return $this->velocidade;
    }

    public function setVelocidade($velocidade): self {
        $this->velocidade = $velocidade;

        return $this;
    }
}